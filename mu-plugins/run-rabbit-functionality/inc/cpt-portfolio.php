<?php
/**
 *
 * Register Custom Post Type
 *
 * @package Run Rabbit Run
 */

add_action( 'init', 'cptui_register_my_cpts' );
function cptui_register_my_cpts() {
	/**
	 * Post Type: Portfolio.
	 */
	$labels = array(
		'name'           => __( 'Portfolio', 'rrr' ),
		'singular_name'  => __( 'Portfolio Item', 'rrr' ),
		'all_items'      => __( 'All Portfolio Pieces', 'rrr' ),
		'add_new'        => __( 'Add new piece', 'rrr' ),
		'featured_image' => __( 'Featured Image for this piece', 'rrr' ),
		'archives'       => __( 'Portfolio', 'rrr' ),
	);

	$args = array(
		'label'               => __( 'Portfolio', 'rrr' ),
		'labels'              => $labels,
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_rest'        => false,
		'rest_base'           => '',
		'has_archive'         => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'exclude_from_search' => false,
		'capability_type'     => 'post',
		'map_meta_cap'        => true,
		'hierarchical'        => false,
		'rewrite'             => array( 'slug' => 'portfolio', 'with_front' => true ),
		'query_var'           => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-schedule',
		'supports'            => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'          => array( 'portfolio' ),
	);

	register_post_type( 'portfolio', $args );
}
