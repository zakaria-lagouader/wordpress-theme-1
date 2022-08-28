<?php

class Header_Menu_Walker extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $output .= "<ul class='dropdown-menu' aria-labelledby='navbarDropdown-$depth'>";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $li_classes = [];
        $li_classes[] = ($item->current || $item->current_item_ancestor) ? "active" : "";
        $li_classes[] = $args->walker->has_children ? "dropdown" : "";
        $li_classes[] = $depth > 0 ? "" : "nav-item";

        $a_classes = [];
        $a_classes[] = $depth > 0 ? "dropdown-item" : "nav-link";
        $a_classes[] = $args->walker->has_children ? "dropdown-toggle" : "";

        $a_dropdown_attr = $args->walker->has_children ? "id='navbarDropdown-$depth' role='button' data-bs-toggle='dropdown' aria-expanded='false'" : "";

        $output .= "<li class='" . join(" ", $li_classes) . "'>";
        $output .= "<a class='" . join(" ", $a_classes) . "' href='$item->url' $a_dropdown_attr>$item->title</a>";
    }
}

/**
 * Filters the CSS classes applied to a menu item's list item element.
 *
 * @param string[]  $classes   Array of the CSS classes that are applied to the menu item's <code>&lt;li&gt;</code> element.
 * @param \WP_Post  $menu_item The current menu item object.
 * @param \stdClass $args      An object of wp_nav_menu() arguments.
 * @param int       $depth     Depth of menu item. Used for padding.
 * @return string[] Array of the CSS classes that are applied to the menu item's <code>&lt;li&gt;</code> element.
 */
add_filter("nav_menu_css_class", function (array $classes, \WP_Post $menu_item, object $args, int $depth): array {
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}, 10, 4);
