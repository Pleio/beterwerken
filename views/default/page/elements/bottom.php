<div id="bottom-boxes">
    <?php
    $plugin = elgg_get_plugin_from_id("beterwerken");
    for ($i=1;$i<4;$i++) : ?>
        <div class="elgg-col-1of3 elgg-widgets">
            <div class="elgg-module-widget blue-box">
                <div class="elgg-body">
                    <h3><a href="<?php echo $plugin->getSetting("box" . $i . "_link"); ?>"><?php echo $plugin->getSetting("box" . $i . "_text"); ?></a></h3>
                </div>
            </div>
        </div>
    <?php endfor; ?>

    <div class="clear"></div>
</div>
<div class="clear"></div>