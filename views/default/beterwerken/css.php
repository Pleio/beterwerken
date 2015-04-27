<?php
/**
 * Beterwerken
 *
 * Contains CSS for Beterwerken
 *
 */

//include(elgg_get_data_path() . "beterwerken/cssinc.php");
$image_path = elgg_get_site_url() . '/mod/beterwerken/graphics/';

?>


body {background: #fff;}

.elgg-button-submit {
    color: white;
    text-shadow: 1px 1px 0px black;
    text-decoration: none;
    border: 1px solid #4690d6;
    background: #4690d6  url(<?php echo elgg_get_site_url(); ?>_graphics/button_graduation.png) repeat-x left 10px;
}

.elgg-button-submit:hover {
    border-color: #0054a7;
    text-decoration: none;
    color: white;
    background:  #0054a7 url(<?php echo elgg_get_site_url(); ?>_graphics/button_graduation.png) repeat-x left 10px;
}

.elgg-breadcrumbs > li > a:hover {
    color: #0054a7;
    text-decoration: underline;
}

.elgg-menu-site-more > li > a:hover {
    background: #0054a7;
    color: white;
}

.elgg-menu-page a:hover {
    background-color: #0054A7;
    color: white;
    text-decoration: none;
}

.elgg-menu-owner-block li a:hover {
    background-color: #0054A7;
    color: white;
    text-decoration: none;
}

a {
    color: $etcolor2;
}

h1, h2, h3, h4, h5, h6 {
    font-weight: bold;
    color: #0079c9;
}

.elgg-heading-basic {
    color: #323232;
    font-size: 1.2em;
    font-weight: bold;
}

.elgg-loud {
    color: #323232;
}



.elgg-menu-page li.elgg-state-selected > a {
    background-color: #323232;
    color: white;
}

.elgg-heading-site, .elgg-heading-site:hover {

}

.elgg-page-default .elgg-page-header  .elgg-inner {
    width: 960px;
    height: 64px;
}

.elgg-page-default {
    min-width: 960px;
    width: 960px;
    margin: 0px auto;
    border-right: 1px solid #000000;
    background: #ffffff;
    border-left: 1px solid #000000;
    -moz-box-shadow: 0 0 10px #888;
    -webkit-box-shadow: 0 0 10px #888;
    box-shadow: 0 0 10px #181a2f;
    padding-top: 0 !important;
}

.elgg-heading-site, .elgg-heading-site:hover {

}

.welcome-text .elgg-output {
    position: relative;
    padding-left: 330px;

}
.welcome-text img {
    position: absolute;
    float: left;
    margin-left: -339px;
    top: 25px;
}
.welcome-text a {
    color: #0079c9;
}

.elgg-page-footer {
  /*  height: 117px; */
}

.elgg-page-footer {
    color: #999;
    background: #fff;
}
.elgg-page-footer a:link {
    color: #ccc;
}

.elgg-page-footer a:hover {
    color: #666;
}
#login-dropdown {
    position: absolute;
    top: 10px;
    right: 0;
    z-index: 100;
    margin-right: 10px;
}


.elgg-menu-item-report-this{
    margin-left: 10px;
    margin-top: 5px;
}



.elgg-page-default .elgg-page-body > .elgg-inner {
    width: 960px;
    margin: 0 auto;

}

.elgg-page-default .elgg-page-footer > .elgg-inner {
    width: 960px;
    margin: 0 auto;
    padding: 5px 0;
    border-top: 1px solid #DEDEDE;

}

.elgg-page-header .elgg-search {
    float: right;
    width: 157px;
    padding: 0;
    line-height: 0;
}

ul.search-advanced-type-selection {
    display: none;
}

.elgg-menu-footer-default {
    float: right;
    padding-right: 10px;
}

.elgg-menu-site-default{
    background: #0079c9;
    padding-top: 5px;
}

a {
    color: #007cdc;
}
.elgg-page-topbar {

}
#logo {
    display: block;
    position: absolute;
    left: 40px;
}
#social-links {
    float: right;
    width: 83px;
    margin: 0 10px 0 11px;
}

#social-links a {
    float: left;
    width: 25px;
    height: 25px;
    background: url(<?php echo $image_path; ?>social_icons.png);
    margin-right: 4px;
}
#social-links a.linkedin {
    background-position: -25px 0;
}
#social-links a.twitter {
    background-position: -50px 0;
}

#social-links a.last {
    margin-right: 0;
}

#login-dropdown {
    top: 40px;
}

.elgg-page-banner {
    position:relative;
}

.elgg-heading-main {
    color: #007cdc;
    font-weight: normal;
}

.elgg-main > .elgg-head {
    padding: 0;
    margin: 0;
    border: 0;
}
.elgg-main .elgg-content a {
    color: #0079c9;
}
.elgg-main .elgg-content h2, .elgg-main .elgg-content h3,
.elgg-main .elgg-content h4, .elgg-main .elgg-content h5 {
    font-size: 25px;
    font-size: 2.5rem;
    font-weight: normal;
    margin-bottom: 0.7em;
}
.elgg-main .elgg-content h2 {
    font-size: 29px;
    font-size: 2.9rem;
    font-weight: normal;
    margin-bottom: 1em;
}
.elgg-main .elgg-content h3 {
    font-size: 27px;
    font-size: 2.7rem;
    font-weight: normal;
    margin-bottom: 0.8em;
}

.elgg-main .elgg-content ul {
    margin: 0 0 1.5em 1.5em;
    list-style: disc;
}

.elgg-page-breadcrumbs {
    padding-left: 240px;
    color: #323232;
}
.elgg-breadcrumbs > li > a {
    color: #323232;
}

.widgets_image_slider_content .bottom, .elgg-page-banner .banner-text, .slides .flex-caption {
    /* background: url(<?php echo $image_path; ?>transparent_white.png) ; */
    position: absolute;
    bottom: 20px;
    right: 0;
    left: auto;
    width: 95%;
    font-size: 36px;
    font-size: 3.67rem;
    padding: 5px 15px;
    color: #fff;
    line-height: 1.2em;
}

.slides .flex-caption {
    filter: alpha(opacity = 70);
    -moz-opacity: 0.8;
    -khtml-opacity: 0.8;
    opacity: 0.8;
    width: 58.8%;
    bottom: auto;
    top: 142px;
}


div.flexslider {
    margin-bottom: 20px;
}

.flex-direction-nav {
    display: none;
}
ol.flex-control-nav {
    bottom: -25px;
    display: none;
}
ol.flex-control-nav li a {
    background: url(<?php echo $image_path; ?>slider_controls.png) no-repeat;
    width: 10px;
    height: 9px;
    float: left;
    margin-right: 3px;
}
ol.flex-control-nav li a:hover, ol.flex-control-nav li a.active {
    background-position: -10px 0;
}

.elgg-module h2 {
    font-weight: normal;
}
.elgg-module-widget, .elgg-module-widget:hover {
    background:none;

}
.elgg-module-widget.home-mid {
    height: 450px;
    overflow: auto;
    border-top: 1px solid #646363;
}
.elgg-col-1of3 {
    padding-top: 14px;
    line-height: 1.2em;
}

.elgg-module-widget > .elgg-head h3 {
    font-size: 14px;
    font-size: 1.4rem;
}
.elgg-module-widget > .elgg-body {
    background: none;
}

.elgg-input-plaintext {font-size:12px;}


.elgg-widget-instance-free_html h3,.elgg-widget-instance-events h3 {
    font-size: 18px;
    font-size: 1.8rem;
    margin-bottom: 0;
}


.elgg-widget-instance-events .elgg-content {
    margin: 0;
}
.elgg-widget-instance-events .elgg-list {
    background: #eaf6fd;
    padding: 10px;
    margin-top: -10px;
    color: #6e6f71;
}
.elgg-widget-instance-events .elgg-list  a {
    color: #6e6f71;
}
.event_manager_event_actions_drop_down a {
    color: #a45193;
}
div#event_manager_registrationform_lightbox {
    height: auto;
}
div#event_manager_registrationform_lightbox input.elgg-button-submit {
    float: right;
}
.elgg-list {
    border: 0;
}
.elgg-list > li {
    border: 0;
}

li.elgg-item {
    margin-bottom: 1em;
}

.elgg-module-widget.blue-box {
    min-height: 290px;
    overflow: hidden;
}


.elgg-module-widget.blue-box > .elgg-body {
    float: left;
    background: #007aca;

}
.blue-box h3 {
    margin-bottom: 0;
}
.elgg-module-widget.blue-box h3 a {
    font-size: 31px;
    font-size: 3.1rem;
    font-weight: normal;
    color: #fff;
    padding-bottom: 60px;
    background: url(<?php echo $image_path; ?>arrow.png) no-repeat left bottom;
    display: block;
    line-height: 1.3em;
    height: 135px;
}

#people-slider {float: left; margin: 5px;}


.elgg-page-default .elgg-page-footer > .elgg-inner {
    border: 0;
}

#event-manager-program-day-lightbox {
    width: 400px;
    height: 400px;
}
#event-manager-program-day-lightbox input[type="text"] {
    display: block;
}
#event_manager_result_navigation, #event_manager_search_form, #event_manager_event_listing .elgg-item .elgg-menu-hz, .event-manager-event-view-search-attendees {
    display: none;
}

#event_manager_event_listing strong{
    color: #b3005c;
    font-size: 20px;
    font-size: 2rem;
    font-weight:  normal;
}
#event_manager_event_listing .elgg-item {
    border-bottom: 1px solid #646363;
    padding-bottom: 30px;
}
#event_manager_event_listing .elgg-item .elgg-content {
    margin : 0;
}

#event_manager_event_listing h3 {
    margin-bottom: 5px;
    line-height: 0.6em;
}
#event_manager_event_listing h3 a {
    font-size: 20px;
    font-size: 2rem;
}
.addthis_toolbox {
    height: auto;
    margin-bottom: 10px;
}
#sidebar-icons {
    overflow: hidden;
}

#sidebar-icons .icon {
    width: 113px;
    margin-bottom: 70px;
    display: block;
    float: right;
}

.elgg-sidebar div#practice {
    background: url(<?php echo $image_path; ?>in_de_praktijk.jpg) no-repeat;
    padding: 92px 2px 0;
    text-align: center;

}
.elgg-sidebar div#practice a {
    color: #0079c9;
}
.elgg-sidebar a#contact {
    background: url(<?php echo $image_path; ?>contact.jpg) no-repeat;
    height: 91px;
}
#tools-box {
    margin-bottom: 30px;
}
#tools-box h3, #verhalen-box h3 {
    color: #0079c9;
    font-size: 23px;
    background: #ddf1fb;
    webkit-border-top-left-radius: 10px;
    -webkit-border-top-right-radius: 10px;
    -moz-border-radius-topleft: 10px;
    -moz-border-radius-topright: 10px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    padding: 10px;
    font-weight: normal;
    width: auto;
    float: left;
    margin-bottom: 0;
}
.tools-container, #verhalen-box ul {
    background: #ddf1fb;
    clear: both;
    line-height: 1.2em;
    overflow: hidden;
    padding-top: 10px;
}
#tools-box ul {
    background: #0079c9;
    margin: 0 10px 5px;
    padding: 5px;

}
#tools-box ul li {
    margin-bottom: 10px;
}
#tools-box ul li.meer-weten {
    margin-top: 40px;
}
#tools-box ul li.meer-weten a {
    color: #ccf1fb;
}
#tools-box ul a {
    color: #fff;
}

#tools-box #linkedin-icon {
    width: 34px;
    height: 33px;
    display: block;
    background: url(<?php echo $image_path; ?>linkedin_icon.png) no-repeat;;
    margin: 10px 0 10px 10px;
}
#verhalen-box ul li {
    margin: 0 0 10px 10px;
    float: left;
    width: 90px;
    height: 90px;
}
#verhalen-box ul li a img {
    display: block;
}

#verhalen-list img {
    float: left;
    margin: 5px  5px 5px 0;
}

#verhalen-list li {
    margin-bottom: 20px;
}

#group-list {
    margin-top: 30px;
}
#group-list li {
    margin-bottom: 5px;
}
#group-list h3 {
    margin: 5px 0 10px;
    font-size: 16px;
    font-weight: normal;
}
#group-list .elgg-menu {
    display: none;
}

#group-list .elgg-body {
    float: left;
    width: 80%;
}

#footer-links {
    border-top: 9px solid #d4edfa;
    border-bottom: 25px solid #007aca;
    margin-bottom: 70px;
    padding: 10px 20px 15px 20px;
    clear: both;
}

#footer-links a {
    display: block;
    float: left;
    background: url(<?php echo $image_path; ?>footer_logos.jpg) no-repeat;
    height: 58px;
    margin-right: 10px;
}
#footer-links a.mvzk {
    width: 201px;
    margin-right: 35px;
}

#footer-links a.ace {
    width: 94px;
    background-position: -201px 0;
}

#footer-links a.ace {
    width: 94px;
    background-position: -201px 0;
}

#footer-links a.summer {
    width: 73px;
    background-position: -295px 0;
}

#footer-links a.puur {
    width: 51px;
    background-position: -368px 0;
}

#footer-links a.eer {
    width: 55px;
    background-position: -419px 0;
}
#footer-links a.pitch {
    width: 73px;
    background-position: -473px 0;
}
#footer-links a.publieke {
    width: 165px;
    background-position: -546px 0;
}
#footer-links a.vo {
    width: 113px;
    background-position: -711px 0;
}

#footer-links a.last {
    margin-right: 0;
}

.purple {color: #a45193 !important;}
#login-dropdown {display:none;}
.elgg-form-login label {display: block;}

.elgg-image .elgg-avatar-tiny.elgg-avatar {display:none;}
#nieuws-list h3 {margin-bottom: 10px;}
#nieuws-list .elgg-subtext {margin-bottom: 10px;}

.elgg-widget-instance-index_blog h3 {
    font-size: 18px;
    font-size: 1.8rem;
    margin-bottom: 0;
}
.elgg-widget-instance-index_blog .elgg-subtext  {display: none;}
.elgg-widget-instance-index_blog .elgg-content  {margin: 0; }
.nieuws-page .elgg-menu-filter.elgg-menu-hz {display: none;}