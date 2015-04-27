<?php
elgg_register_event_handler('init', 'system', 'beterwerken_init');

function beterwerken_init() {
    //elgg_register_library('elgg:blog', elgg_get_plugins_path() . 'blog/lib/blog.php');
    elgg_register_library('beterwerken:nieuws', elgg_get_plugins_path() . 'beterwerken/lib/beterwerken.php');

	        elgg_extend_view('css/elgg', 'beterwerken/css');
		      elgg_unregister_menu_item('topbar', 'elgg_logo');
                elgg_unextend_view('page/elements/header', 'search/header');
                elgg_extend_view('css/admin', 'beterwerken/admin');
                elgg_extend_view ('page/elements/head','beterwerken/meta');


		$base = elgg_get_plugins_path() . 'beterwerken/actions/beterwerken';
    elgg_register_action('beterwerken/settings/save', "$base/save.php", 'admin');

    //Static pages plugin overrides
    elgg_unregister_page_handler("static");
    elgg_register_page_handler("static", "bw_static_page_handler");

    elgg_register_page_handler('nieuws', 'bw_nieuws_page_handler');

    elgg_unregister_action('static/edit');
    elgg_register_action("static/edit", dirname(__FILE__). "/actions/static/edit.php", "admin");

    //override page handler for blog to update the breadcrumb
    elgg_unregister_page_handler("blog");
    elgg_register_page_handler("blog", "bw_blog_page_handler");

    elgg_register_page_handler("robots", "bw_robots_page_handler");



    global $CONFIG;
    //remove all items of the 'site' menu
    foreach ($CONFIG->menus['site'] as $index => $menu_object) {
            unset($CONFIG->menus['site'][$index]);
    }
    //add pages


    elgg_push_breadcrumb("Home", elgg_get_site_url());

    $page_title = get_input("page_title");
    //add sliding header widget
    elgg_register_widget_type('slider', 'Slider', 'Footer slider widget', "index");
}



function bw_static_page_handler($page){
    set_input("page_title", $page[1]);
    include_once(dirname(__FILE__) . "/pages/static.php");
    return true;
}

function bw_nieuws_page_handler($page) {
    elgg_load_library('beterwerken:nieuws');
    $params = get_blog_list();
    $body = elgg_view_layout('content', $params);

    echo elgg_view_page($params['title'], $body);

    return true;
}

function bw_blog_page_handler($page) {

    elgg_load_library('elgg:blog');

    // forward to correct URL for blog pages pre-1.8
    blog_url_forwarder($page);

    // push all blogs breadcrumb
    //elgg_push_breadcrumb(elgg_echo('blog:blogs'), "blog/all");
    elgg_push_breadcrumb(elgg_echo('beterwerken:nieuws'), "nieuws");


    if (!isset($page[0])) {
        $page[0] = 'all';
    }
    $page_type = $page[0];
    switch ($page_type) {
        case 'owner':
            $user = get_user_by_username($page[1]);
            $params = blog_get_page_content_list($user->guid);
            break;
        case 'friends':
            $user = get_user_by_username($page[1]);
            $params = blog_get_page_content_friends($user->guid);
            break;
        case 'archive':
            $user = get_user_by_username($page[1]);
            $params = blog_get_page_content_archive($user->guid, $page[2], $page[3]);
            break;
        case 'view':
            $params = bw_blog_get_page_content_read($page[1]);
            break;
        case 'read': // Elgg 1.7 compatibility
            register_error(elgg_echo("changebookmark"));
            forward("blog/view/{$page[1]}");
            break;
        case 'add':
            gatekeeper();
            $params = blog_get_page_content_edit($page_type, $page[1]);
            break;
        case 'edit':
            gatekeeper();
            $params = blog_get_page_content_edit($page_type, $page[1], $page[2]);
            break;
        case 'group':
            if ($page[2] == 'all') {
                $params = blog_get_page_content_list($page[1]);
            } else {
                $params = blog_get_page_content_archive($page[1], $page[3], $page[4]);
            }
            break;
        case 'all':
            $params = blog_get_page_content_list();
            break;
        default:
            return false;
    }

    if (isset($params['sidebar'])) {
        $params['sidebar'] .= elgg_view('blog/sidebar', array('page' => $page_type));
    } else {
        $params['sidebar'] = elgg_view('blog/sidebar', array('page' => $page_type));
    }

    $body = elgg_view_layout('content', $params);

    echo elgg_view_page($params['title'], $body);
    return true;
}

function bw_blog_get_page_content_read($guid = NULL) {

    $return = array();

    $blog = get_entity($guid);

    // no header or tabs for viewing an individual blog
    $return['filter'] = '';

    if (!elgg_instanceof($blog, 'object', 'blog')) {
        register_error(elgg_echo('noaccess'));
        $_SESSION['last_forward_from'] = current_page_url();
        forward('');
    }

    $return['title'] = $blog->title;

    $container = $blog->getContainerEntity();
    $crumbs_title = $container->name;
    if (elgg_instanceof($container, 'group')) {
        elgg_push_breadcrumb($crumbs_title, "blog/group/$container->guid/all");
    } else {
        //remove user posts breadcrumb
        //elgg_push_breadcrumb($crumbs_title, "blog/owner/$container->username");
    }

    elgg_push_breadcrumb($blog->title);
    $return['content'] = elgg_view_entity($blog, array('full_view' => true));
    // check to see if we should allow comments
    if ($blog->comments_on != 'Off' && $blog->status == 'published') {
        $return['content'] .= elgg_view_comments($blog);
    }

    return $return;
}
