<?php
/**
 * Elgg footer
 * The standard HTML footer that displays across the site
 *
 * @package Elgg
 * @subpackage Core
 *
 */

/*echo elgg_view_menu('footer', array('sort_by' => 'priority', 'class' => 'elgg-menu-hz'));

$powered_url = elgg_get_site_url() . "_graphics/powered_by_elgg_badge_drk_bckgnd.gif";

echo '<div class="mts clearfloat float-alt">';
echo elgg_view('output/url', array(
	'href' => 'http://elgg.org',
	'text' => "<img style=\"margin-right: 10px;\" src=\"$powered_url\" alt=\"Powered by Elgg\" width=\"106\" height=\"15\" />",
	'class' => '',
	'is_trusted' => true,
));
echo '</div>';*/
?>
<?php if (elgg_get_context() == "index") : ?>

    <?php  $plugin = elgg_get_plugin_from_id("beterwerken");  ?>

    <script type="text/javascript" src="<?php echo elgg_get_site_url(); ?>/mod/beterwerken/views/default/js/jcarousellite_1.0.1.min.js"></script>
    <div id="people-slider">
        <ul>
            <?php $count = 0; for ($i=1; $i<21; $i++) : ?>
                <?php
                $image = $plugin->getSetting("people_slider_image_" . $i);
                $link = $plugin->getSetting("people_slider_link_" . $i);
                if (!$image) continue;
                $count++;
                ?>
                <li class="slide">
                    <div class="elgg-module-widget">
                        <a href="<?php echo $link; ?>"><img src="<?php echo $image ; ?>" width="303" height="195" /></a>
                    </div>
                </li>
            <?php endfor; $auto = ($count > 3) ? "true" : "false"; ?>
        </ul>
    </div>
    <script>
        $("#people-slider").jCarouselLite({
            auto: <?php echo $auto ?>,
            speed: 2000
        });
    </script>
<?php endif; ?>
<div id="footer-links" class="clearfix">
    <a href="#" class="mvzk"></a>
    <a href="#" class="ace"></a>
    <a href="#" class="summer"></a>
    <a href="#" class="puur"></a>
    <a href="#" class="eer"></a>
    <a href="#" class="pitch"></a>
    <a href="#" class="publieke"></a>
    <a href="#" class="vo last"></a>
</div>


