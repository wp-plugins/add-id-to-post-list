<?php
/**
 * Plugin Name: Add ID to post list
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: This plugin lets you see the ID of the every post in the list. Can be useful when using shortcodes or other plugins.
 * Version: 0.1
 * Author: Jorge Castro
 * Author URI: http://jorgecastro.mx
 * License: GPL2
 */

add_filter('manage_posts_columns', 'posts_columns_id', 5);
add_action('manage_posts_custom_column', 'posts_custom_id_columns', 5, 2);
add_filter('manage_pages_columns', 'posts_columns_id', 5);
add_action('manage_pages_custom_column', 'posts_custom_id_columns', 5, 2);
function posts_columns_id($defaults){
	$defaults['wps_post_id'] = __('ID');
	return $defaults;
}
function posts_custom_id_columns($column_name, $id){
	if($column_name === 'wps_post_id'){
		echo $id;
	}
}