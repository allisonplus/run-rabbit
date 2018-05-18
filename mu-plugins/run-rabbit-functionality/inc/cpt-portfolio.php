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
		'taxonomies'          => array( 'portfolio_category' ),
	);

	register_post_type( 'portfolio', $args );
}

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
