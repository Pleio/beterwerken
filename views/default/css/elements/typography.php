<?php
/**
 * CSS typography
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>

/* ***************************************
Typography
*************************************** */
html {
    font-size: 62.5%; /* Corrects text resizing oddly in IE6/7 when body font-size is set using em units http://clagnut.com/blog/348/#c790 */
    overflow-y: scroll; /* Keeps page centred in all browsers regardless of content height */
    -webkit-text-size-adjust: 100%; /* Prevents iOS text size adjust after orientation change, without disabling user zoom */
    -ms-text-size-adjust: 100%; /* www.456bereastreet.com/archive/201012/controlling_text_size_in_safari_for_ios_without_disabling_user_zoom/ */
}

body,
button,
input,
select,
textarea {
    color: #404040;
    font-family: Calibri, sans-serif;
    font-size: 18px;
    font-size: 1.8rem;
    line-height: 1.5;
}

/* Headings */
h1, h2, h3, h4, h5, h6 {
    clear: both;
    font-size: 31px;
    font-size: 3.1rem;
    color: #0079c9;
    line-height: 1em;
    margin-bottom: 1em;
}
hr {
    background-color: #ccc;
    border: 0;
    height: 1px;
    margin-bottom: 1.5em;
}

/* Text elements */
p {
    margin-bottom: 1.5em;
}
#content ul,  #content ol {
    margin: 0 0 1.5em 3em;
}
ul {
    list-style: none;
}
ol {
    list-style: decimal;
}
li > ul,
li > ol {
margin-bottom: 0;
}
dt {
font-weight: bold;
}
dd {
margin: 0 1.5em 1.5em;
}
b, strong {
font-weight: bold;
}
dfn, cite, em, i {
font-style: italic;
}
blockquote {
margin: 0 1.5em;
}
address {
margin: 0 0 1.5em;
}
pre {
background: #eee;
font-family: "Courier 10 Pitch", Courier, monospace;
font-size: 15px;
font-size: 1.5rem;
line-height: 1.6;
margin-bottom: 1.6em;
padding: 1.6em;
overflow: auto;
max-width: 100%;
}
code, kbd, tt, var {
font: 15px Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace;
}
abbr, acronym {
border-bottom: 1px dotted #666;
cursor: help;
}
mark, ins {
background: #fff9c0;
text-decoration: none;
}
sup,
sub {
font-size: 75%;
height: 0;
line-height: 0;
position: relative;
vertical-align: baseline;
}
sup {
bottom: 1ex;
}
sub {
top: .5ex;
}
small {
font-size: 75%;
}
big {
font-size: 125%;
}
figure {
margin: 0;
}
table {
margin: 0 0 1.5em;
width: 100%;
}
th {
font-weight: bold;
}
