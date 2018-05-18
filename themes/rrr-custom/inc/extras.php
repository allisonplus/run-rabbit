<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Run Rabbit Run
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function rrr_body_classes( $classes ) {

	global $is_IE;

	// If it's IE, add a class.
	if ( $is_IE ) {
		$classes[] = 'ie';
	}

	// Give all pages a unique class.
	if ( is_page() ) {
		$classes[] = 'page-' . basename( get_permalink() );
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds "no-js" class. If JS is enabled, this will be replaced (by javascript) to "js".
	$classes[] = 'no-js';

	return $classes;
}
add_filter( 'body_class', 'rrr_body_classes' );

add_action( 'login_enqueue_scripts', 'rrr_custom_login' );
/**
 * Customize the login screen styles.
 */
function rrr_custom_login() {
	?>

	<style type="text/css">
		.login {
			align-items: center;
			background-color: #cafff5;
			background-image: linear-gradient(0deg, #cafff5 0%, #deffde 100%);
			display: flex;
			flex-direction: column;
			height: 100vh;
			justify-content: center;
		}
		#login {
			padding: 0 !important;
		}
		#login h1 a,
		.login h1 a {
			background-image: url( <?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/rrr-login.png' ); ?> );
			background-size: contain;
			height: 150px;
			width: 150px;
		}
		.login #nav a,
		#login #nav a,
		.login #backtoblog a,
		#login #backtoblog a {
			color: #111;
		}
		.login #nav a:hover,
		#login #nav a:hover,
		.login #backtoblog a:hover,
		#login #backtoblog a:hover {
			color: #111;
		}

		.login #backtoblog, .login #nav {
			padding: 0!important;
		}
	</style>
	<?php
}

/**
 * Sets number of posts returned for Portfolio Archive.
 *
 * @param object $query given WPQuery.
 */
function rrr_portfolio_archive_count( $query ) {
	if ( ! is_admin() && $query->is_main_query() && is_post_type_archive( 'portfolio' ) ) {

		$query->set( 'posts_per_page', '-1' );
	}
}
add_action( 'pre_get_posts', 'rrr_portfolio_archive_count' );


add_filter( 'get_the_archive_title', 'rrr_archive_title_remove_prefix' );
/**
 * Remove prefix from CPT archive title.
 *
 * @param string $title Title of Archive.
 */
function rrr_archive_title_remove_prefix( $title ) {
	if ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	}

	return $title;
}
