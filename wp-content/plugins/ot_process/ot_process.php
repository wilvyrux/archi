<?php
/*
	Plugin Name: OT Process
	Plugin URI: http://oceanthemes.net/
	Description: Declares a plugin that will create a custom post type displaying portfolio.
	Version: 1.0
	Author: OceanThemes Team
	Author URI: http://oceanthemes.net/
	Text Domain: ot_process
	Domain Path: /lang
	License: GPLv2 or later
*/

/* UPDATE 
  register_activation_hook is not called when a plugin is updated
  so we need to use the following function 
*/
function ot_process_update() {
	load_plugin_textdomain('ot_process', FALSE, dirname(plugin_basename(__FILE__)) . '/lang/');
}
add_action('plugins_loaded', 'ot_process_update');

function ot_processs_type() {
	$processlabels = array (	

		'name' => __('Process','ot_process'),

		'singular_name' => __('Process','ot_process'),

		'add_new' => __('Add Process','ot_process'),

		'add_new_item' => __('Add new process','ot_process'),

		'edit_item' => __('Edit Process','ot_process'),

		'new_item' => __('Add new process','ot_process'),

		'all_items' => __('All Process','ot_process'),

		'view_item' => __('View Process','ot_process'),

		'search_item' => __('Search Process','ot_process'),

		'not_found' => __('No process found..','ot_process'),

		'not_found_in_trash' => __('No process found in Trash.','ot_process'),

		'menu_name' => 'Process'
	);

	$args = array(
		'labels' => $processlabels,
		'hierarchical' => false,
		'description' => 'Manages process',
		'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => null,
		'menu_icon' => 'dashicons-chart-pie',		
		'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array('slug'=>'process'),
        'capability_type' => 'post',
		'supports' => array( 'title','editor','thumbnail','excerpt','comments','custom-fields'),
	);
	register_post_type ('process',$args);
}
add_action ('init','ot_processs_type');

function ot_process_taxonomy () {
	$taxonomylabels = array(

	'name' => __('Category process','ot_process'),

	'singular_name' => __('Category process','ot_process'),

	'search_items' => __('Search Category process','ot_process'),

	'all_items' => __('All Category process','ot_process'),

	'edit_item' => __('Edit Category process','ot_process'),

	'add_new_item' => __('Add new Category process','ot_process'),

	'menu_name' => __('Category process','ot_process'),

	);

	$args = array(

	'labels' => $taxonomylabels,

	'hierarchical' => true,

);
	register_taxonomy('category_process','process',$args);
}
add_action ('init','ot_process_taxonomy',0);

?>