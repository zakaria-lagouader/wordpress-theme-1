<?php

/**
 * Fires when scripts and styles are enqueued.
 *
 */
add_action("wp_enqueue_scripts", function (): void {
    wp_enqueue_style('bootstrap', asset_uri("plugins/bootstrap/bootstrap.min.css"), array(), false, 'all');
    wp_enqueue_style('tabler-icons', asset_uri("plugins/tabler-icons/tabler-icons.min.css"), array(), false, 'all');
    wp_enqueue_style('main', asset_uri("assets/css/style.css"), array("bootstrap", "tabler-icons"), "1.0", 'all');

    wp_enqueue_script("bootsrap", asset_uri("plugins/bootstrap/bootstrap.min.js"), array(), false, true);
    wp_enqueue_script("lightense", asset_uri("plugins/lightense/lightense.min.js"), array(), false, true);
    wp_enqueue_script("main", asset_uri("assets/js/script.js"), array("bootsrap", "lightense"), "1.0", true);
});
