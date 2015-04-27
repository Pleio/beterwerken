<?php

function get_blog_list() {
    $return = array();

    $return['filter_context'] = '';

    $options = array(
        'type' => 'object',
        'subtype' => 'blog',
        'full_view' => false,
    );

    $current_user = elgg_get_logged_in_user_entity();


    if (elgg_is_admin_logged_in()) {
        elgg_register_title_button('blog', 'add');
    }

    $options['metadata_name_value_pairs'] = array(
        array('name' => 'status', 'value' => 'published'),
    );


    elgg_pop_breadcrumb();
    elgg_push_breadcrumb(elgg_echo('beterwerken:nieuws'));

    $list = elgg_list_entities_from_metadata($options);
    if (!$list) {
        $return['content'] = elgg_echo('blog:none');
    } else {
        $return['content'] = "<div id='nieuws-list'>" . $list . "</div>";
    }
    $return['title'] = 'Nieuws';
    return $return;
}