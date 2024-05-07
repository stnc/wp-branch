<?php
$uama_wp_branch_themeName = 'uama_wp_branch';//for include data
$uama_wp_branch_prefix_branch = $uama_wp_branch_themeName . "_Metabox_";
$uama_wp_branch_OptionsPageSetting = array(
	'name' => $uama_wp_branch_prefix_branch . 'meta-box-page',
	'nonce' => 'st_studio_branch',
	'title' => __('EK Bilgiler', 'branchLang'),
	'page' => 'branch',
	//'context' => 'side',
	'context' => 'normal',
	'priority' => 'default',
	'class' => '',
	'style' => '',
	'title_h2' => true,
	'fields' => array(

		array(
			'name' => $uama_wp_branch_prefix_branch . 'branch_name',
			'title' => __('Branch Name', 'branchLang'),
			'type' => 'text',
			'description' => '',
			'style' => '',
			'class' => '',
			'class_li' => '',
		),

		array(
			'name' => $uama_wp_branch_prefix_branch . 'branch_code',
			'title' => __('Branch Code', 'branchLang'),
			'type' => 'text',
			'description' => '',
			'style' => '',
			'class' => '',
			'class_li' => '',
		),

		array(
			'name' => $uama_wp_branch_prefix_branch . 'phone',
			'title' => __('Phone', 'branchLang'),
			'type' => 'text',
			'description' => '',
			'style' => '',
			'class' => '',
			'class_li' => '',
		),
	
		array(
			'name' => $uama_wp_branch_prefix_branch . 'adress',
			'title' => __('Adress', 'branchLang'),
			'type' => 'textarea',
			'description' => '',
			'style' => '',
			'class' => '',
			'class_li' => '',
		),

		array(
			'name' => $uama_wp_branch_prefix_branch . 'google_map',
			'title' => __('Google Map', 'branchLang'),
			'type' => 'textarea',
			'description' => '',
			'style' => '',
			'class' => '',
			'class_li' => '',
		),

		array(
			'name' => $uama_wp_branch_prefix_branch . 'donate_form_shortcode',
			'title' => __('Donate Form Shortcode', 'branchLang'),
			'type' => 'textarea',
			'description' => '',
			'style' => '',
			'class' => '',
			'class_li' => '',
		),

		array(
			'name' => $uama_wp_branch_prefix_branch . 'wp_form_shortcode',
			'title' => __('Summer Camp Form Shortcode', 'branchLang'),
			'type' => 'textarea',
			'description' => '',
			'style' => '',
			'class' => '',
			'class_li' => '',
		),


		// array(
		// 	'name' => $uama_wp_branch_prefix_branch . 'color_code',
		// 	'title' => __('Color Code', 'branchLang'),
		// 	'type' => 'color',
		// 	'description' => '',
		// 	'style' => '',
		// 	'class' => '',
		// 	'class_li' => '',
		// ),

		// array(
		// 	'name' => $uama_wp_branch_prefix_branch . 'media-gallery',
		// 	'title' => __('media-gallery', 'branchLang'),
		// 	'type' => 'media-gallery',
		// 	'button_text' => 'Video Yükle / Seç',
		// 	'description' => __("", 'branchLang'),
		// 	'style' => '',
		// 	'class' => '',
		// 	'class_li' => '',
		// ),


				// array(
		// 	'name' => $uama_wp_branch_prefix_branch . 'branch_name',
		// 	'title' => __('upload', 'branchLang'),
		// 	'type' => 'upload',
		// 	'button_text' => 'uploadee',
		// 	'description' => '',
		// 	'style' => '',
		// 	'class' => '',
		// 	'class_li' => '',
		// ),
	

				// array(
		// 	'name' => 'page_header_type_info',
		// 	'title' => __('bla bla bl
		// 	. <br> bla bla bla', 'branchLang'),
		// 	'type' => 'info',
		// 	'description' => '',
		// 	'style' => '',
		// 	'class' => '',
		// 	'class_li' => '',
		// 	'extra' => '',
		// ),

		/////-----------------------------
		// array(
		// 	'name' => $uama_wp_branch_prefix_branch . 'gender',
		// 	'title' => __('Gender of doctor', 'branchLang'),
		// 	'type' => 'select',
		// 	'description' => __("Select gender", 'branchLang'),
		// 	'style' => '',
		// 	'class' => '',
		// 	'class_li' => '',
		// 	'options' => array(
		// 		'male' => __('Male', 'branchLang'),
		// 		'female' => __('Female', 'branchLang'),
		// 	)
		// ),

	
		// array(
		// 	'name' => $uama_wp_branch_prefix_branch . 'gal',
		// 	'title' => __('gal', 'branchLang'),
		// 	'button_text' => __('gal', 'branchLang'),
		// 	'type' => 'media-gallery',
		// 	'description' => '',
		// 	'style' => '',
		// 	'class' => '',
		// 	'class_li' => '',
		// ),
		
	)
);