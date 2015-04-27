<?php
/**
 * Layout for main column with one sidebar
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['content'] Content HTML for the main column
 * @uses $vars['sidebar'] Optional content that is displayed in the sidebar
 * @uses $vars['title']   Optional title for main content area
 * @uses $vars['class']   Additional class to apply to layout
 * @uses $vars['nav']     HTML of the page nav (override) (default: breadcrumbs)
 */

$class = 'elgg-layout elgg-layout-one-sidebar clearfix';
if (isset($vars['class'])) {
    $class = "$class {$vars['class']}";
}

if (get_input("handler") == "nieuws") {
    $class .= " nieuws-page";
}


//get entity
$page_title = get_input("page_title");

if($guid){
    $content = get_entity($guid);

} elseif(!empty($page_title)){
    if(is_numeric($page_title)){
        // support old links
        if($content = get_entity($page_title)){
            if($content->getSubtype() != "static"){
                unset($content);
            }
        }
    }

    if(!$content){
        $options = array(
            "type" => "object",
            "subtype" => "static",
            "metadata_name_value_pairs" => array("friendly_title" => $page_title),
            "limit" => 1
        );
        if($entities = elgg_get_entities_from_metadata($options)){
            $content = $entities[0];
        }
    }
}
if ($content) {

    //if static type is verhalenpagina, show the verhalen/tool box
    if ($content->static_type == 2) {

        $vars['sidebar'] = "";
        $vars['sidebar'] .=  "<div id='sidebar-icons'>";

        //get the tool texts and links
        $tools = unserialize($content->tools);
        if (!empty($tools)) {
            foreach ($tools as $tool) {
                if (empty($tool["text"])) continue;
                $tool_html .= "<li><a href='" . $tool["link"] . "'> > " . $tool["text"] . "</a></li>";
            }

            $contact_html = ($content->contact_link) ? "<li class='meer-weten'><a href='" . $content->contact_link . "'>Meer weten? <br /> Neem contact op met " . $content->contact_name ."</a></li>" : "";
            $linkedin_html =  ($content->linkedin_link) ? "<a target='_blank' id='linkedin-icon' href='". $content->linkedin_link . "'></a>" : "";

            if (!empty($tool_html) || !empty($contact_html) || !empty($linkedin_html)) {

                $vars['sidebar'] .= "<div id='tools-box'>";
                $vars['sidebar'] .= "<h3>Verdieping</h3>";
                $vars['sidebar'] .= "<div class='tools-container'>";
                if ((!empty($tool_html) || !empty($contact_html) )) {
                    $vars['sidebar']  .= "<ul>";
                    $vars['sidebar'] .= $tool_html;
                    $vars['sidebar']  .= $contact_html;
                    $vars['sidebar']  .= "</ul>";
                }
                $vars['sidebar']  .= $linkedin_html;

                $vars['sidebar']  .= "</div>";
                $vars['sidebar'] .= "</div>";
            }
        }

        $vars['sidebar'] .= "</div>";

        $verhalen_options = array(
            "type" => "object",
            "subtype" => "static",
            "metadata_name_value_pairs" => array("static_type" => 2, "parent_guid" => $content->parent_guid ),
            "limit" => 20
        );
        $verhalen = elgg_get_entities_from_metadata($verhalen_options);
        if (count($verhalen) > 1) {
            $sidebar .= "<div id='verhalen-box'>";
            $sidebar .= "<h3>Meer verhalen</h3>";
            $sidebar .= "<ul>";
            $plugin = elgg_get_plugin_from_id("beterwerken");
            $default_thumb = $plugin->getSetting("verhalen_thumb_default");
            foreach ($verhalen as $v) {
                if ($content->guid == $v->guid) continue;
                $thumb = ( $v->page_thumb ) ?  $v->page_thumb : $default_thumb;
                $sidebar .= "<li><a href='" . $v->getURL() . "'><img alt='" . $v->title . "' src='" . $thumb . "' /></a></li>";
            }
            $sidebar .= "</ul>";
            $sidebar .= "</div>";
        }
        $vars['sidebar'] .= $sidebar;

    }

}

?>

<div class="<?php echo $class; ?>">

    <?php
     // if static type is not landingspagina, show sidebar
     if ($content->static_type != 3) : ?>
        <div class="elgg-sidebar">
            <?php
                echo elgg_view('page/elements/sidebar', $vars);
            ?>
        </div>
    <?php endif; ?>
    <div class="elgg-main elgg-body">
        <?php
        //echo $nav;

        if (isset($vars['title'])) {
            echo elgg_view_title($vars['title']);
        }
        // @todo deprecated so remove in Elgg 2.0
        if (isset($vars['area1'])) {
            echo $vars['area1'];
        }
        if (isset($vars['content'])) {
            echo $vars['content'];
        }


        ?>
    </div>
</div>
<div class="clear"></div>