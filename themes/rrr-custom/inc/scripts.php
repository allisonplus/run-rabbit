<?php
/**
 * Custom scripts and styles.
 *
 * @package Run Rabbit Run
 */

/**
 * Register Google font.
 *
 * @link http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
 */
function rrr_font_url() {

	$fonts_url = '';

	/**
	 * Translators: If there are characters in your language that are not
	 * supported by the following, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$open_sans = _x( 'on', 'Open Sans font: on or off', 'rrr' );
	$noto_serif = _x( 'on', 'Noto Serif font: on or off', 'rrr' );

	if ( 'off' !== $open_sans || 'off' !== $noto_serif ) {
		$font_families = array();

		if ( 'off' !== $open_sans ) {
			$font_families[] = 'Open+Sans:400,600';
		}

		if ( 'off' !== $noto_serif ) {
			$font_families[] = 'Noto Serif:400,700';
		}

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
		);

		$fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
	}

	// <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700|Open+Sans:400,600" rel="stylesheet">

	return $fonts_url;
}

/**
 * Enqueue scripts and styles.
 */
function rrr_scripts() {
	/**
	 * If WP is in script debug, or we pass ?script_debug in a URL - set debug to true.
	 */
	$debug = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG == true ) || ( isset( $_GET['script_debug'] ) ) ? true : false;

	/**
	 * If we are debugging the site, use a unique version every page load so as to ensure no cache issues.
	 */
	$version = '1.0.0';

	/**
	 * Should we load minified files?
	 */
	$suffix = ( true === $debug ) ? '' : '.min';

	// Register styles.
	wp_register_style( 'rrr-google-font', rrr_font_url(), array(), null );

	// Enqueue styles.
	wp_enqueue_style( 'rrr-google-font' );
	wp_enqueue_style( 'rrr-style', get_stylesheet_directory_uri() . '/style' . $suffix . '.css', array(), $version );

	// Slider.
	wp_enqueue_style( 'rrr-carousel-style', 'https://unpkg.com/flickity@2/dist/flickity.min.css' );
	wp_enqueue_script( 'rrr-carousel-js', 'https://unpkg.com/flickity@2.1.2/dist/flickity.pkgd.min.js', array( 'jquery' ) );

	// Enqueue scripts.
	wp_enqueue_script( 'rrr-scripts', get_template_directory_uri() . '/assets/js/project' . $suffix . '.js', array( 'jquery' ), $version, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Enqueue the mobile nav script
	// Since we're showing/hiding based on CSS and wp_is_mobile is wp_is_imperfect, enqueue this everywhere.
	wp_enqueue_script( 'rrr-mobile-nav', get_template_directory_uri() . '/assets/js/mobile-nav-menu' . $suffix . '.js', array( 'jquery' ), $version, true );
}
add_action( 'wp_enqueue_scripts', 'rrr_scripts' );

/**
 * Add SVG definitions to <head>.
 */
function rrr_include_svg_icons() {

	// Define SVG sprite file.
	$svg_icons = get_template_directory() . '/assets/images/svg-icons.svg';

	// If it exists, include it.
	if ( file_exists( $svg_icons ) ) {
		require_once( $svg_icons );
	}
}
