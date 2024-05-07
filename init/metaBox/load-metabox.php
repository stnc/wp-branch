<?php 
//--------------branch-------------
function ssBranch_branch_options_()
{
	include('for_branch/metabox_options.php');
	$ssBranch_branch_options['0'] = $uama_wp_branch_OptionsPageSetting;
	 new ssSytemMetaboxEngine($ssBranch_branch_options, 'uama_wp_branch-Setting', true);
}


if (ssBranch_post_type()["get_type"] == 'branch' || ssBranch_post_type()["post_type"] == 'branch' ) {
	ssBranch_branch_options_();
}

include ("for_branch/sidebar-metabox.php");

//--------------staff-------------

function ssBranch_staff_options_()
{
	include('for_staff/metabox_options.php');
	$ssBranch_branch_options['0'] = $uama_wp_staff_OptionsPageSetting;
	new ssSytemMetaboxEngine($ssBranch_branch_options, 'uama_wp_staff-Setting', true);
}


if (ssBranch_post_type()["get_type"] ==   'uama_staff' || ssBranch_post_type()["post_type"] == 'uama_staff'  ) {
	ssBranch_staff_options_();
}

//--------------Donate-------------

function ssBranch_donate_options_()
{
	include('for_donate/metabox_options.php');
	$ssBranch_donate_options['0'] = $uama_wp_donate_OptionsPageSetting;
	new ssSytemMetaboxEngine($ssBranch_donate_options, 'uama_wp_donate-Setting', true);
}


if (ssBranch_post_type()["get_type"] ==   'donate' || ssBranch_post_type()["post_type"] == 'donate'  ) {
	ssBranch_donate_options_();
}







//--------------post-------------  cancel 

// function uama_wp_post_options_()
// {
// 	include('for-post/metabox_options.php');
// 	$ssBranch_branch_options['0'] = $ssBranch_OptionsPageSetting;
// 	 new uama_wp_metabox_engine($ssBranch_branch_options, 'uama_wp_post-Setting', true);
// }


// if (ssBranch_post_type()["get_type"] ==  'post' || ssBranch_post_type()["post_type"] == 'post' ) {
// 	uama_wp_post_options_();
// }
