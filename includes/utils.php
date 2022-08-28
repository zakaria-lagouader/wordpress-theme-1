<?php
function asset_uri($path)
{

    return get_template_directory_uri() . "/public/" . ltrim($path, "/");
}

function asset($path)
{

    echo asset_uri($path);
}

function get_custom_logo_url()
{
    $custom_logo_id = get_theme_mod('custom_logo');
    $image = wp_get_attachment_image_src($custom_logo_id, 'full');
    return $image[0];
}

function wp_get_menu_array($current_menu = 'Main Menu')
{

    $menu_array = wp_get_nav_menu_items($current_menu);
    $menu_array = $menu_array === false ? [] : $menu_array;

    $menu = array();

    function populate_children($menu_array, $menu_item)
    {
        $children = array();
        if (!empty($menu_array)) {
            foreach ($menu_array as $k => $m) {
                if ($m->menu_item_parent == $menu_item->ID) {
                    $children[$m->ID] = array();
                    $children[$m->ID]['ID'] = $m->ID;
                    $children[$m->ID]['title'] = $m->title;
                    $children[$m->ID]['url'] = $m->url;
                    unset($menu_array[$k]);
                    $children[$m->ID]['children'] = populate_children($menu_array, $m);
                }
            }
        };
        return $children;
    }

    foreach ($menu_array as $m) {
        if (empty($m->menu_item_parent)) {
            $menu[$m->ID] = new stdClass();
            $menu[$m->ID]->ID = $m->ID;
            $menu[$m->ID]->title = $m->title;
            $menu[$m->ID]->url = $m->url;
            $menu[$m->ID]->children = populate_children($menu_array, $m);
        }
    }

    return $menu;
}

function dd($value)
{
    echo "<pre>";
    print_r($value);
    echo "</pre>";
    die();
}
