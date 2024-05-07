<?php

function ssBranch_register_staff_type()
{
    $singular = 'Uama Staff';
     $plural = __('Staff', 'branchLang');
     $slug = str_replace(' ', '_', strtolower($singular));
    $labels = array(
        'name' => $plural,
        'singular_name' => __('Staff', 'branchLang'),
        'add_new' =>__('New Staff Add', 'branchLang'),
        'add_new_item' => __('New Staff Add', 'branchLang'),
        'edit' => __('Edit', 'branchLang'),
        'edit_item' => __('Edit', 'branchLang'),
        'new_item' => __('New Staff', 'branchLang'),
        'view' => __('Show Staff', 'branchLang'),
        'view_item' => __('Show Staff', 'branchLang'),
        'search_term' =>  __('Search Staff', 'branchLang'),
        'parent' =>  __('Sub Staff', 'branchLang'),
        'not_found' => __('There are no donate added', 'branchLang'),
        'not_found_in_trash' => __('Trash can empty', 'branchLang'),
    );
    $args = array(
        'label' => 'staff',
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'show_in_menu' => "edit.php?post_type=branch",
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
add_action('init', 'ssBranch_register_staff_type');




///depent categories for donate 
function ssBranch_create_cat_taxonomies()
{
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name' => __( 'Categories', 'branchLang' ) ,
        'singular_name' => __('Categories', 'branchLang'),
        'add_new_item' =>  __('Add New Category', 'branchLang'),
        'search_items' =>__('Search Category', 'branchLang'),
        'popular_items' => __('Popular Category', 'branchLang'),
        'all_items' => __('All Categories', 'branchLang'),
        'parent_item' => __('Sub Categories', 'branchLang'),
        'parent_item_colon' => __('Sub Categories', 'branchLang'),
        'edit_item' => __('Category Edit', 'branchLang'),
        'update_item' => __('Category Edit', 'branchLang'),
        'new_item_name' => __('New Category', 'branchLang'),
    );
    
    register_taxonomy('uama_branch_cat', array("branch","uama_staff"), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'query_var' => true,
        'with_front' => true,
        'show_in_menu' => "edit.php?post_type=branch",
        'rewrite' => array('slug' => 'uama_branch_cat'),
    ));
}

add_action('init', 'ssBranch_create_cat_taxonomies', 0);




