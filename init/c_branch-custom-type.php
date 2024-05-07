<?php
function ssBranch_register_branch_type()
{
    $singular = 'branch';
    $plural = __('Branch', 'branchLang');
    $slug = str_replace(' ', '_', strtolower($singular));
    $labels = array(
        'name' => $plural,
        'singular_name' =>  __('Branch', 'branchLang'),
        'add_new' =>  __( 'New Branch Add', 'branchLang' ) ,
        'add_new_item' =>  __( 'New Branch Add', 'branchLang' ) ,
        'edit' =>  __( 'Branch Edit', 'branchLang' ) ,
        'edit_item' =>__( 'Branch Edit', 'branchLang' ) ,
        'new_item' => __( 'New Branch', 'branchLang' ) ,
        'view' => __( 'Show Branch', 'branchLang' ) ,
        'view' => __( 'Show Branch', 'branchLang' ) ,
        'search_term' => __( 'Branch Search', 'branchLang' ) ,
        'parent' => __('Sub Branch', 'branchLang'),
        'not_found' =>  __('There are no branches added', 'branchLang'),
        'not_found_in_trash' => __('Trash can empty', 'branchLang'),
    );
    $args = array(
        'label' => 'branch',
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'show_in_menu' => true,
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

add_action('init', 'ssBranch_register_branch_type');



