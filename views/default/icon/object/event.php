<?php

    $entity = elgg_extract("entity", $vars);
    $size = elgg_extract("size", $vars, "medium");

    if($size == "date") {
        $start_day = $entity->start_day;
        //$icon = "<div class='event_manager_event_list_icon' title='" . date(EVENT_MANAGER_FORMAT_DATE_EVENTDAY, $start_day) . "'>";
        $icon = "<strong title='" . date("d/m/y", $start_day) . "'>";
        //$icon .=  strtoupper(date("M", $start_day)) .  date("d", $start_day) . date("Y", $start_day) ;
        //$icon .=  elgg_echo('date:month:' . date("m", $start_day), array('2')) . " " .  date("Y", $start_day);
        $icon .=  date("d", $start_day) . "/" . date("m", $start_day) . "/" . date("y", $start_day);
        $icon .= "</strong>";

        echo $icon;
    }

