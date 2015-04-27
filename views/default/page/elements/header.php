<?php
/**
 * Elgg page header
 * In the default theme, the header lives between the topbar and main content area.
 */


// link back to main site.
echo elgg_view('page/elements/header_logo', $vars);

echo elgg_view('search/search_box', array('class' => 'elgg-search-header'));


// insert site-wide navigation
echo elgg_view_menu('site');


// drop-down login
echo elgg_view('core/account/login_dropdown');

