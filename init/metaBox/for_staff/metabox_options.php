<?php
$uama_wp_staff_themeName = 'uama_wp_staff';
$uama_wp_staff_prefix_staff = $uama_wp_staff_themeName . "_Metabox_";//imporntant -- becase this is database name 
$uama_wp_staff_OptionsPageSetting = array(
	'name' => $uama_wp_staff_prefix_staff . 'meta-box-page',
	'nonce' => 'uama_studio_staff',
	'title' => __('Staff Information', 'branchLang'),
	'page' => 'uama_staff',
	//'context' => 'side',
	'context' => 'normal',
	'priority' => 'default',
	'class' => '',
	'style' => '',
	'title_h2' => true,
	'fields' => array(

		array(
			'name' => $uama_wp_staff_prefix_staff . 'name_lastname',
			'title' => __('Name Lastname', 'branchLang'),
			'type' => 'text',
			'description' => '',
			'style' => '',
			'class' => '',
			'class_li' => '',
		),

		array(
			'name' => $uama_wp_staff_prefix_staff . 'name',
			'title' => __('Name ', 'branchLang'),
			'type' => 'text',
			'description' => '',
			'style' => '',
			'class' => '',
			'class_li' => '',
		),

		array(
			'name' => $uama_wp_staff_prefix_staff . 'lastname',
			'title' => __(' Lastname', 'branchLang'),
			'type' => 'text',
			'description' => '',
			'style' => '',
			'class' => '',
			'class_li' => '',
		),

		array(
			'name' => $uama_wp_staff_prefix_staff . 'username',
			'title' => __('Username', 'branchLang'),
			'type' => 'text',
			'description' => '',
			'style' => '',
			'class' => '',
			'class_li' => '',
		),


		array(
			'name' => $uama_wp_staff_prefix_staff . 'email',
			'title' => __('Email Adress', 'branchLang'),
			'type' => 'text',
			'description' => '',
			'style' => '',
			'class' => '',
			'class_li' => '',
		),


		
		array(
			'name' => $uama_wp_staff_prefix_staff . 'phone1',
			'title' => __('Phone', 'branchLang'),
			'type' => 'text',
			'description' => '',
			'style' => '',
			'class' => '',
			'class_li' => '',
		),


				
		array(
			'name' => $uama_wp_staff_prefix_staff . 'website',
			'title' => __('Web Site', 'branchLang'),
			'type' => 'text',
			'description' => '',
			'style' => '',
			'class' => '',
			'class_li' => '',
		),

		array(
			'name' => $uama_wp_staff_prefix_staff . 'password',
			'title' => __('password', 'branchLang'),
			'type' => 'hidden',
			'description' => '',
			'style' => '',
			'class' => '',
			'class_li' => '',
		),

	)
);