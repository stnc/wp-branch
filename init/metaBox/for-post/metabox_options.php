<?php 
$ssBranch_post_themeName = 'uama_post_event';//for include data
$ssBranch_prefix = $ssBranch_post_themeName . "_metabox_";
$ssBranch_OptionsPageSetting = array(
	'name' => $ssBranch_prefix . 'meta-box-page',
	'nonce' => 'st_studio_post',
	'title' => __('EK Bilgiler', 'branchLang'),
	'page' => 'post',
	//'context' => 'side',
	'context' => 'normal',
	'priority' => 'default',
	'class' => '',
	'style' => '',
	'title_h2' => true,
	'fields' => array(
		array(
			'name' => $ssBranch_prefix . 'time',
			'title' => __('Event Time', 'branchLang'),
			'type' => 'text',
			'description' => '',
			'style' => '',
			'class' => '',
			'class_li' => '',
		),

		array(
			'name' => $ssBranch_prefix . 'page_view',
			'title' => __('Page View', 'branchLang'),
			'type' => 'text',
			'description' => '',
			'style' => '',
			'class' => '',
			'class_li' => '',
		),
	)
);