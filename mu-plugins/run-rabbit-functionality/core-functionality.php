<?php
/**
 * Plugin Name:       Run Rabbit Run Functionality Plugin
 * Description:       This plugin stores custom functionality for Run Rabbit Run.
 * Version:           1.0.0
 * Author:            Allison Tarr
 * Author URI:        http://www.allisontarr.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rrr
 * Domain Path:       /languages
 *
 * @package Run Rabbit Run
 */

/**
 *
 * Function to remove <p> tags on images.
 */
function filter_ptags_on_images( $content ) {
	return preg_replace( '/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content );
}
add_filter( 'the_content', 'filter_ptags_on_images' );

/**
 *
 * Function to set default image link to none.
 */
update_option( 'image_default_link_type','none' );


/**
 *
 * Enable SVG support.
 */
function cc_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

// /**
// *
// * Register Custom Taxonomies
// */

//  [To Do]: replace "taxonomy-name-plural" and "taxonomy-name-singular" with desired name" OR remove this code

// add_action( 'init', 'cptui_register_my_taxes' );
// function cptui_register_my_taxes() {

// 	$labels = array(
// 		'name'                       => 'taxonomy-name-plural',
// 		'label'                      => 'taxonomy-name-plural',
// 		'menu_name'                  => 'taxonomy-name-plural',
// 		'all_items'                  => 'All taxonomy-name-plural',
// 		'edit_item'                  => 'Edit taxonomy-name-singular',
// 		'view_item'                  => 'View taxonomy-name-singular',
// 		'update_item'                => 'Update taxonomy-name-singular Name',
// 		'add_new_item'               => 'Add New taxonomy-name-singular',
// 		'new_item_name'              => 'New taxonomy-name-singular Name',
// 		'parent_item'                => 'Parent taxonomy-name-singular',
// 		'parent_item_colon'          => 'Parent taxonomy-name-singular:',
// 		'search_items'               => 'Search taxonomy-name-plural',
// 		'popular_items'              => 'Popular taxonomy-name-plural',
// 		'separate_items_with_commas' => 'Separate taxonomy-name-plural with commas',
// 		'add_or_remove_items'        => 'Add or remove taxonomy-name-plural',
// 		'choose_from_most_used'      => 'Choose from most used taxonomy-name-plural',
// 		'not_found'                  => 'No taxonomy-name-plural found',
// 	);

// 	$args = array(
// 		'labels'            => $labels,
// 		'hierarchical'      => true,
// 		'label'             => 'taxonomy-name-plural',
// 		'show_ui'           => true,
// 		'query_var'         => true,
// 		'rewrite'           => array( 'slug' => 'taxonomy-name-plural', 'with_front' => true ),
// 		'show_admin_column' => true,
// 	);
// 	egister_taxonomy( 'taxonomy-name-plural', array( 'post-type-singular' ), $args );

// 	// End cptui_register_my_taxes.
// }
