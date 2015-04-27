<script>
//Initial load of page
$(document).ready(sizeContent);

//Every resize of window
$(window).resize(sizeContent);

//Dynamically assign height
function sizeContent() {
    var newHeight = $("html").height() - $(".elgg-page-header").height() - $(".elgg-page-footer").height() - $(".elgg-page-topbar").height() + "px";
    $(".elgg-page-body").css("min-height", newHeight);
    $(".elgg-layout-one-sidebar").css("min-height", newHeight);
}
        
</script>

<?php
    if (get_input("handler") == "blog" || get_input("handler") == "events"  && strpos( get_input("page"), "view") !== false)  : ?>
        <meta property="og:title" content="<?php echo $vars['title'] ?>" />
        <meta property="og:url" content="<?php echo elgg_get_site_url()  . get_input("handler") . '/' . get_input("page") ?>" />
        <meta property="og:image" content="<?php echo elgg_get_site_url(); ?>mod/beterwerken/graphics/logo.png" />
    <?php endif;
    //do not index files
    if (elgg_get_context() == "file" && strpos( get_input("page"), "view") !== false) {
        ?><meta name="robots" content="noindex">
    <?php
    }

        
