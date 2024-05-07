<?php 
function ssBranch_admin_enqueue_style()
{    wp_enqueue_style('ssBranch_style', plugins_url('../assets/css/min/ss-system-custom-post-admin.css', __FILE__));
}


function ssBranch_script_in_admin($hook) {
    wp_register_script( 'ssBranch-admin',plugin_dir_url( __FILE__ ) . '../assets/js/ss-admin.js', '',true );
    wp_enqueue_script('ssBranch-admin');

    wp_register_script( 'ssBranch-admin-color',plugin_dir_url( __FILE__ ) . '../assets/js/ss-color-picker-init.js', '',true );
    wp_enqueue_script('ssBranch-admin-color');

}


if  (ssBranch_post_type()["post_type"] === 'branch' || ssBranch_post_type()["get_type"] === 'branch' ||  ssBranch_post_type()["get_type"] === 'uama_staff' || ssBranch_post_type()["get_type"] === 'uama_staff') {
    add_action('admin_enqueue_scripts', 'ssBranch_admin_enqueue_style');
    add_action('admin_enqueue_scripts', 'ssBranch_script_in_admin');
}