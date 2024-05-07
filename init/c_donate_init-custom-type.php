<?php

function ssBranch_register_donate_type()
{
    $singular = 'donate';
     $plural = __('Donate', 'branchLang');
     $slug = str_replace(' ', '_', strtolower($singular));
    $labels = array(
        'name' => $plural,
        'singular_name' => __('Donate', 'branchLang'),
        'add_new' => __('New Donate Page', 'branchLang'),
        'add_new_item' => __('New Donate Page', 'branchLang'),
        'edit' =>__('Edit', 'branchLang'),
        'edit_item' => __('Edit', 'branchLang'),
        'new_item' => __('New Donate Page', 'branchLang'),
        'view' => __('Show Donate Page', 'branchLang'),
        'view_item' => __('Show Donate Page', 'branchLang'),
        'search_term' => __('Search Donate Page', 'branchLang'),
        'parent' => __('Sub Donate Page', 'branchLang'),
        'not_found' => __('There are no staff added', 'branchLang'),
        'not_found_in_trash' => __('Trash can empty', 'branchLang'),
    );
    $args = array(
        'label' => 'donate',
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'show_in_menu' => "edit.php?post_type=give_forms",
        'show_in_admin_bar' => true,
        'menu_position' => 30,
        'menu_icon' => 'dashicons-images-alt2',
        'can_export' => true,
        'delete_with_user' => false,
        'hierarchical' => true,
        'show_in_nav_menus' => false,
        'has_archive' => true,
        'query_var' => true,
        'map_meta_cap' => true,
        'show_in_rest'   => true,
        'rewrite' => array(
            'slug' =>  $slug,
            "with_front" => true
        ),

        'supports' => array(
            'title',
            'excerpt',
            'editor',
            'thumbnail',
            'custom-fields'
        )
    );

    register_post_type($slug, $args);

}
add_action('init', 'ssBranch_register_donate_type');


///depent categories 
function ssBranch_create_cat_donate_taxonomies()
{
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name' => __( 'Donate Categories', 'branchLang' ) ,
        'singular_name' => __('Donate Categories', 'branchLang'),
        'add_new_item' =>  __('New Donate Category', 'branchLang'),
        'search_items' =>__('Donate Search Category', 'branchLang'),
        'popular_items' => __('Donate Category', 'branchLang'),
        'all_items' => __('All Donate Categories', 'branchLang'),
        'parent_item' => __('Sub Donate Categories', 'branchLang'),
        'parent_item_colon' => __('Sub Categories', 'branchLang'),
        'edit_item' => __('Donate Category Edit', 'branchLang'),
        'update_item' => __('Donate Category Edit', 'branchLang'),
        'new_item_name' => __('New Donate', 'branchLang'),
    );
    register_taxonomy('donate_cat', array("donate"), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'query_var' => true,

        'rewrite' => array('slug' => 'donate_cat'),
    ));
}

add_action('init', 'ssBranch_create_cat_donate_taxonomies', 0);