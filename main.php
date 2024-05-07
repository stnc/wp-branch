<?php
/**
 * Plugin Name: Single System Branch
 * Author: Single System Branch Teams
 * Text-domain: wp-single-system
 * Version: 3.0.0
 * Description: Branch and Staff 
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */


function ssBranch_post_type()
{
    $ssBranch_post_type_postID = isset ($_GET['post']) ? $_GET['post'] : null;
    $ssBranch_get_type = get_post_type($ssBranch_post_type_postID);
    $ssBranch_post_type = isset ($_REQUEST['post_type']) ? $_REQUEST['post_type'] : 'post';
    return array(
        "post_id" =>  $ssBranch_post_type_postID ,
        "get_type" => $ssBranch_get_type,
        "post_type" => $ssBranch_post_type,
    );
}

define('ssBranch_init_Path', plugin_dir_path(__FILE__) . 'init/');

define('ssBranch_pages_Path', plugin_dir_path(__FILE__) . 'pages/');

require_once (ssBranch_init_Path .'init-languages.php');

require_once (ssBranch_init_Path ."init-menu.php");


require_once (ssBranch_init_Path .'c_branch-custom-type.php');
require_once (ssBranch_init_Path .'c_donate_init-custom-type.php');
require_once (ssBranch_init_Path .'c_staff_custom-type.php');

require_once (ssBranch_init_Path . "metaBox/class.metabox-engine.php");

require_once (ssBranch_init_Path . "metaBox/load-metabox.php");

require_once (ssBranch_pages_Path ."about/about.php");

require_once (ssBranch_init_Path .'init-assets.php');

function ssBranch_init_languages() {
	// Retrieve the directory for the internationalization files
    load_plugin_textdomain('branchLang', false, dirname(plugin_basename(__FILE__)) . '/languages/');
}
add_action( 'plugins_loaded', 'ssBranch_init_languages' );