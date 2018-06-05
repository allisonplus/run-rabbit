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
// * Register Custom Taxonomies
// */
function cptui_register_my_taxes() {
	/**
	 * Taxonomy: Categories.
	 */
	$labels = array(
		'name'          => __( 'Categories', 'rrr' ),
		'singular_name' => __( 'Category', 'rrr' ),
	);

	$args = array(
		'label'              => __( 'Categories', 'rrr' ),
		'labels'             => $labels,
		'public'             => true,
		'hierarchical'       => true,
		'label'              => 'Categories',
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_nav_menus'  => false,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio_category', 'with_front' => true ),
		'show_admin_column'  => true,
		'show_in_rest'       => false,
		'rest_base'          => 'portfolio_category',
		'show_in_quick_edit' => false,
	);
	register_taxonomy( 'portfolio_category', array( 'portfolio' ), $args );
}

add_action( 'init', 'cptui_register_my_taxes' );
