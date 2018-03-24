<?php
/**
 * Custom queries.
 *
 * @package Run Rabbit Run
 */

/**
 * All CPT Query.
 *
 * @return WP_Query The recent posts.
 */
function rrr_query_cpt() {
	$puppets = wp_count_posts( 'puppets' )->publish;
	$illustrations = wp_count_posts( 'illustration' )->publish;
	$total_posts = intval( $puppets ) + intval( $illustrations );

	return new WP_Query( array(
		'post_type'              => array( 'puppets', 'illustration' ),
		'posts_per_page'         => $total_posts,
		'no_found_rows'          => true,
		'update_post_meta_cache' => false,
		'update_post_term_cache' => false,
	) );
}

/**
 * Illustrations Query.
 *
 * @return WP_Query The recent posts.
 */
function rrr_query_illustrations() {

	return new WP_Query( array(
		'post_type'              => 'illustration',
		'no_found_rows'          => true,
		'update_post_meta_cache' => false,
		'update_post_term_cache' => false,
	) );
}

/**
 * Puppets Query.
 *
 * @return WP_Query The recent posts.
 */
function rrr_query_puppets() {

	return new WP_Query( array(
		'post_type'              => 'puppets',
		'no_found_rows'          => true,
		'update_post_meta_cache' => false,
		'update_post_term_cache' => false,
	) );
}
