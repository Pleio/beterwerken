<?php

global $CONFIG;

$guid = (int) get_input("guid");
$parent_guid = (int) get_input("parent_guid");
$title = get_input("title");

$friendly_title = get_input("friendly_title", $title);
$friendly_title = preg_replace('~&([a-z]{1,2})(acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities($friendly_title, ENT_QUOTES, 'UTF-8'));
$friendly_title = elgg_get_friendly_title($friendly_title);

$description = get_input("description");
$banner_image = get_input("banner_image");
$banner_text = get_input("banner_text");
$page_thumb = get_input("page_thumb");
$tools = get_input("tools");
$linkedin_link = get_input("linkedin_link");
$contact_name = get_input("contact_name");
$contact_link = get_input("contact_link");
$static_type = get_input("static_type");
$access_id = get_input("access_id", ACCESS_PUBLIC);

if($guid){
    $content = get_entity($guid);
    if(empty($content) || ($content->getSubtype() !== "static") || !($content->canEdit())){
        forward(REFERER);
    } else {
        if(!empty($title)){
            $content->title = $title;
        }
        $content->description = $description;
        $content->access_id = $access_id;
        $content->banner_image = $banner_image;
        $content->banner_text = $banner_text;
        $content->page_thumb = $page_thumb;
        $content->tools = serialize($tools);
        $content->linkedin_link = $linkedin_link;
        $content->contact_link = $contact_link;
        $content->contact_name = $contact_name;
        $content->static_type = $static_type;
        $content->save();
        if(!empty($parent_guid)){
            if ($parent_guid !== $content->parent_guid) {
                unset($content->order);
            }
            $content->parent_guid = $parent_guid;
        } else {
            unset($content->parent_guid);
            unset($content->order);
        }
        $content->friendly_title = $friendly_title;
        forward($content->getURL());
    }

} else {
    if(!empty($title)){
        $content = new ElggObject();
        $content->subtype = "static";
        $content->access_id = $access_id;
        $content->owner_guid = $CONFIG->site_guid;
        $content->container_guid = $CONFIG->site_guid;
        $content->title = $title;
        $content->description = $description;
        $content->banner_image = $banner_image;
        $content->banner_text = $banner_text;
        $content->page_thumb = $page_thumb;
        $content->tools = $tools;
        $content->linkedin_link = $linkedin_link;
        $content->contact_name = $contact_name;
        $content->contact_link = $contact_link;
        $content->parent_guid = $parent_guid;
        $content->friendly_title = $friendly_title;
        $content->static_type = $static_type;
        $content->save();

        forward($content->getURL());
    } else {
        forward(REFERER);
    }
}