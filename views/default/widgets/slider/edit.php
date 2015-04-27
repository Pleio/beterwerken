<?php

$widget = $vars["entity"];

?>
<p>
    <?php
    for ($i=1;$i<6;$i++) {

        $image =  $widget->cycle_image_ . "$i";
        $link =  $widget->cycle_link_ . "$i";


        echo "Slide " . $i . " image <br />";
        echo elgg_view('input/text', array('name' => 'params[cycle_image_' . $i. ']', 'value' => $image)) . "<br />";
        echo "Slide " . $i . " link <br />";
        echo elgg_view('input/text', array('name' => 'params[cycle_link_' . $i. ']', 'value' => $link)) . "<br /><br />";
    }

    ?>
</p>
