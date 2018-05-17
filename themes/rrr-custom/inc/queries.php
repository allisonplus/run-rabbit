<?php
/**
 * Custom queries.
 *
 * @package Run Rabbit Run
 */

/**
 * All CPT Query.
 *
 * @return WP_Query Portfolio CPT.
 */
function rrr_query_cpt() {
	$portfolio = wp_count_posts( 'portfolio' )->publish;
	$total_posts = intval( $portfolio );

	return new WP_Query( array(
		'post_type'              => 'portfolio',
		'posts_per_page'         => $total_posts,
		'no_found_rows'          => true,
		'update_post_meta_cache' => false,
		'update_post_term_cache' => false,
	) );
}

/**
 * Front page CPT Query (limited to 8).
 *
 * @return WP_Query Portfolio CPT.
 */
function rrr_query_front_cpt() {
	$portfolio = wp_count_posts( 'portfolio' )->publish;
	$total_posts = intval( $portfolio );

	return new WP_Query( array(
		'post_type'              => 'portfolio',
		'posts_per_page'         => 8,
		'no_found_rows'          => true,
		'update_post_meta_cache' => false,
		'update_post_term_cache' => false,
	) );
}
