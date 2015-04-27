<?php
/**
 * Verhalen List for landing pages
 *
 * @uses $vars['entity']
 */


$plugin = elgg_get_plugin_from_id("beterwerken");
$landingpages = explode(',',$plugin->getSetting("verhalen_landing_pages"));
if (in_array($vars['entity']->guid, $landingpages)) {
    $list = "";
    $verhalen_options = array(
        "type" => "object",
        "subtype" => "static",
        "metadata_name_value_pairs" => array("parent_guid" => $vars['entity']->guid, "static_type" => 2),
        "limit" => 20
    );
    $verhalen = elgg_get_entities_from_metadata($verhalen_options);
    if ($verhalen) {
        $list .= "<ul id='verhalen-list'>";
        foreach ($verhalen as $v) {
            $list .= "<li>";
                $list .= "<a href='" . $v->getURL() . "'><h4>" .  $v->title . "</h4></a>";
                $list .= "<a href='" . $v->getURL() . "'><img alt='" . $v->title . "' src='" . $v->page_thumb . "' /></a>";
                $list .= elgg_get_excerpt($v->description, 300);
            $list .= "</li>";
        }
        $list .= "</ul>";
    }
    echo $list;
}



