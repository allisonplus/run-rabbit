<?php
/**
 * Markup for ACF Fields.
 *
 * @package Run Rabbit Run
 */

// Hide ACF menu.
// add_filter( 'acf/settings/show_admin', '__return_false' );

// Add Options page.
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}
