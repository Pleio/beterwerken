<?php
/**
 * Elgg Search css
 * 
 */
?>

/**********************************
Search plugin
***********************************/
.elgg-page-header .elgg-search {
    float: right;
    width: 157px;
    padding: 0;
    line-height: 0;
    border: 0;
    height: auto;
}
.elgg-page-header .elgg-search.elgg-search-header input[type=text] {
    -webkit-border-bottom-right-radius: 10px;
    -webkit-border-bottom-left-radius: 10px;
    -moz-border-radius-bottomright: 10px;
    -moz-border-radius-bottomleft: 10px;input, textarea
    border-bottom-left-radius: 10px;
    border: none;
    width: 112px;
    padding: 3px 3px 3px 39px;
    background: url(<?php echo elgg_get_site_url(); ?>/mod/beterwerken/graphics/search_icon.png) no-repeat 14px 50% #fff;
    height: 20px;

}
.elgg-page-header .elgg-search input[type=submit] {
	display: none;
}

.elgg-search input[type=text]:focus, .elgg-search input[type=text]:active {
	background-color: white;
	background-position: 2px -916px;
	border: 1px solid white;
	color: #000;
}

.event_manager_event_actions {
    font-size: 12px;
}

.search-list li {
	padding: 5px 0 0;
}
.search-heading-category {
	margin-top: 20px;
	color: #666666;
}

.search-highlight {
	background-color: #bbdaf7;
}
.search-highlight-color1 {
	background-color: #bbdaf7;
}
.search-highlight-color2 {
	background-color: #A0FFFF;
}
.search-highlight-color3 {
	background-color: #FDFFC3;
}
.search-highlight-color4 {
	background-color: #ccc;
}
.search-highlight-color5 {
	background-color: #4690d6;
}
