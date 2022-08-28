<?php

require_once get_template_directory() . "/includes/utils.php";
require_once get_template_directory() . "/includes/assets.php";
require_once get_template_directory() . "/includes/menu-walker.php";
require_once get_template_directory() . "/includes/pagination.php";

/**
 * Fires after the theme is loaded.
 *
 */
add_action("after_setup_theme", function (): void {
    add_theme_support("title-tag");
    add_theme_support("custom-logo");
    add_theme_support("menus");
    add_theme_support('post-thumbnails');

    // Register Navigation Menus
    register_nav_menus(array(
        'header'   => 'Header Menu',
        'footer'   => 'Footer Menu',
    ));
});

/**
 * Filters the maximum number of words in a post excerpt.
 *
 * @param int $number The maximum number of words. Default 55.
 * @return int The maximum number of words. Default 55.
 */
add_filter("excerpt_length", function (int $number): int {
    return 20;
});

/**
 * Filters the string in the "more" link displayed after a trimmed excerpt.
 *
 * @param string $more_string The string shown within the more link.
 * @return string The string shown within the more link.
 */
add_filter("excerpt_more", function (string $more_string): string {
    return " ...";
});
