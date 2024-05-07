<?php

if (ssBranch_post_type()["post_type"] === 'branch' || ssBranch_post_type()["get_type"] === 'branch') {
	if (is_admin()) {
		add_action('load-post.php', 'ssBranch_branch_init_metabox');
		add_action('load-post-new.php', 'ssBranch_branch_init_metabox');
	}
}

/*register metabox */
function ssBranch_branch_init_metabox()
{
	// add meta box
	add_action('add_meta_boxes', 'ssBranch_selected_add_meta_box');
	// metabox save
	add_action('save_post', 'ssBranch_selected_save');
}

function ssBranch_selected_add_meta_box()
{
	add_meta_box(
		'uama_wp_branch_metabox',
		__('Sube Sorumlusu Atama', 'branchLang'),
		'ssBranch_selected_html',
		'branch',
		'side',
		'default'
	);
}

function ssBranch_selected_html($post)
{
	wp_nonce_field('_staff_selected_nonce', 'staff_selected_nonce'); ?>

	<label for="uama_wp_branch_slide_time_metaBox">
		<?php _e('Sube Sorumlusu Seciniz', 'branchLang'); ?>
	</label>
	<br>

	<select name="uama_wp_branch_slide_time_metaBox[]" id="uama_wp_branch_slide_time_metaBox">
		<?php
		//https://developer.wordpress.org/reference/functions/query_posts/
		$list_location_db = ssBranch_selected_get_meta_simple('uama_wp_branch_slide_time_metaBox');
		$list_location_db = explode(',', $list_location_db);
		//print_r($list_location_db);
		//burası custom post verisi okur --burada location ın verisi okunmuş 
		$args = array("posts_per_page" => -1, "orderby" => "title", "order" => "asc", 'post_type' => 'uama_staff', 'post_status' => array('publish', 'future', 'private'));
		//'post_status' => array('publish', 'pending', 'draft', 'auto-draft', 'future', 'private', 'inherit', 'trash')
		$posts_array = get_posts($args);
		if ($posts_array) {
			foreach ($posts_array as $key => $location) {
				$locations[$key]["id"] = $location->ID;
				$locations[$key]["title"] = $location->post_title;
			}
		}

		echo '<option  value="0">'. _e("Sube Sorumlusu Seciniz", "branchLang") .'</option>';
		foreach ($locations as $location) {

			if (in_array($location['id'], $list_location_db)) {
				$selected = "selected";
				echo '<option ' . $selected . ' value="' . $location['id'] . ' ">' . $location['title'] . '</option>';

			} else {
				$selected = "";
				echo '<option ' . $selected . ' value="' . $location['id'] . ' ">' . $location['title'] . '</option>';

			}
		}
		?>
	</select>
	<?php
}

/***SIDEBAR staff select METABOX (ONLY branch )  ****/

function ssBranch_selected_get_meta_simple($value)
{
	global $post;
	return get_post_meta($post->ID, $value, true);
}




function ssBranch_selected_save($post_id)
{
	if (wp_is_post_autosave($post_id)) {
		return;
	}
	// Check if not a revision.
	if (wp_is_post_revision($post_id)) {
		return;
	}
	// Stop the script when doing autosave
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post_id;
	}


	// //services save
	// if (isset($_POST['uama_wp_branch_DrAndDep_program_and_services'])) {
	// 	foreach ($_POST['uama_wp_branch_DrAndDep_program_and_services'] as $selectedOption) {
	// 		$selectedOptionlist[] = $selectedOption;
	// 	}
	// 	$selectedOptionlist = implode(",", $selectedOptionlist);
	// 	update_post_meta($post_id, 'uama_wp_branch_DrAndDep_program_and_services', sanitize_text_field($selectedOptionlist));
	// }



	
	if (isset ($_POST['uama_wp_branch_slide_time_metaBox'])) {

		foreach ($_POST['uama_wp_branch_slide_time_metaBox'] as $selectedOption_locations) {
			$selectedOptionlist_locations[] = $selectedOption_locations;
		}
		$selectedOptionlist_locations = implode(",", $selectedOptionlist_locations);
		update_post_meta($post_id, 'uama_wp_branch_slide_time_metaBox', sanitize_text_field($selectedOptionlist_locations));
	}
}