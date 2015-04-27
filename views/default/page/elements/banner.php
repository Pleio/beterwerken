<?php
/**
 * Elgg page banner
 * Gets the banner image and banner text metadata of the static page
 */
$guid = get_input("guid");
$parent_guid = get_input("parent_guid");
$page_title = get_input("page_title");
$edit = get_input("edit", false);
$new = get_input("new", false);

$banner_image = elgg_get_site_url() . 'mod/beterwerken/graphics/banner1.jpg';

if (!empty($page_title)) {
    $options = array(
        "type" => "object",
        "subtype" => "static",
        "metadata_name_value_pairs" => array("friendly_title" => $page_title),
        "limit" => 1
    );
    if($entities = elgg_get_entities_from_metadata($options)){
        $content = $entities[0];
    }
    if($content && ($content->getSubtype() == "static") && !$edit) {
        $parent_guid = $content->parent_guid;
        if(empty($parent_guid)){
            $parent_guid = $content->getGUID();
        }
        if ($content->banner_image) {
            $banner_image =  $content->banner_image;
        }

        $banner_text =  $content->banner_text;

    }

} else {
    $page = get_input("handler");

    switch ($page) {
        case "events" :
            //$banner_text = "Agenda Quote";
            break;
        default :

            break;
    }
}

if (!empty($page_title) || !empty($page)) {
    echo "<img src='" . $banner_image . "' />";
    if (!empty($banner_text)) echo "<div class='banner-text'>" . $banner_text . "</div>";
}