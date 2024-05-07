<?php
$uama_wp_donate_themeName = 'uama_wp_donate';
$uama_wp_donate_prefix_staff = $uama_wp_donate_themeName . "_Metabox_";//imporntant -- becase this is database name 
$uama_wp_donate_OptionsPageSetting = array(
	'name' => $uama_wp_donate_prefix_staff . 'meta-box-page',
	'nonce' => 'uama_studio_staff',
	'title' => __('Donate Extra Information', 'branchLang'),
	'page' => 'donate',
	//'context' => 'side',
	'context' => 'normal',
	'priority' => 'default',
	'class' => '',
	'style' => '',
	'title_h2' => true,
	'fields' => array(

		array(
			'name' => $uama_wp_donate_prefix_staff . 'donate_form_shortcode',
			'title' => __('Donate Form Shortcode', 'branchLang'),
			'type' => 'textarea',
			'description' => '',
			'style' => '',
			'class' => '',
			'class_li' => '',
		),

	)
);