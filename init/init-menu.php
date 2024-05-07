<?php
function ssBranch_configuration_menu()
{
    // add_submenu_page( "edit.php?post_type=branch", 'Ayarlar', 'Ayarlar', 'manage_options', 'ssBranch-config', 'ssBranch_configuration_page' ); 
    add_submenu_page( "edit.php?post_type=branch",   __( 'About', 'branchLang' ) ,   __( 'About', 'branchLang' ) , 'manage_options', 'ssBranch-about', 'ssBranch_about_page' ); 

}
add_action('admin_menu', 'ssBranch_configuration_menu');