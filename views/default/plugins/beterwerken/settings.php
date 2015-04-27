<?php
/*
echo "<h2>Bottom Boxes</h2> <br />";


echo "<h3>Box 1</h3>";
echo "<label>Text: </label>";
echo elgg_view('input/text', array(
    'name' => 'params[box1_text]',
    'value' => $vars['entity']->box1_text,
    'class' => 'beterwerken' ) );

echo "<label>Link: </label>";

echo elgg_view('input/text', array(
    'name' => 'params[box1_link]',
    'value' => $vars['entity']->box1_link,
    'class' => 'beterwerken' ) );
echo "<br /><br />";

echo "<h3>Box 2</h3>";
echo "<label>Text: </label>";
echo elgg_view('input/text', array(
    'name' => 'params[box2_text]',
    'value' => $vars['entity']->box2_text,
    'class' => 'beterwerken' ) );

echo "<label>Link: </label>";

echo elgg_view('input/text', array(
    'name' => 'params[box2_link]',
    'value' => $vars['entity']->box2_link,
    'class' => 'beterwerken' ) );
echo "<br /><br />";

echo "<h3>Box 3</h3>";
echo "<label>Text: </label>";
echo elgg_view('input/text', array(
    'name' => 'params[box3_text]',
    'value' => $vars['entity']->box3_text,
    'class' => 'beterwerken' ) );

echo "<label>Link: </label>";

echo elgg_view('input/text', array(
    'name' => 'params[box3_link]',
    'value' => $vars['entity']->box3_link,
    'class' => 'beterwerken' ) );
echo "<br /><br />";

echo "<hr />";*/

/*echo "<label>Verhalen Landingpaginas: </label><br />Input comma separated ID's of pages with a verhalen overview.";

echo elgg_view('input/text', array(
    'name' => 'params[verhalen_landing_pages]',
    'value' => $vars['entity']->verhalen_landing_pages,
    'class' => 'beterwerken' ) );
echo "<br /><br />";

echo "<label>Verhalen Thumbnail Default: </label>";

echo elgg_view('input/text', array(
    'name' => 'params[verhalen_thumb_default]',
    'value' => $vars['entity']->verhalen_thumb_default,
    'class' => 'beterwerken' ) );
echo "<br /><br />";*/

echo "<label>Footer Slider: </label><br /><br />";
$i = 0;
for($i=1; $i<21; $i++) {
    echo "<label>Slider Image: " . $i . " </label><br />";
    $image = "people_slider_image_" . $i;
    $link = "people_slider_link_" . $i;
    echo elgg_view('input/text', array(
        'name' => 'params['.$image.']',
        'value' => $vars['entity']->$image,
        'class' => 'beterwerken' ) );
    echo "<br />";

    echo "<label>Slider Link: " . $i . " </label>";

    echo elgg_view('input/text', array(
        'name' => 'params['. $link .']',
        'value' => $vars['entity']->$link,
        'class' => 'beterwerken' ) );
    echo "<br /><br />";
}

