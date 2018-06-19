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

/**
 * Single Portfolio Image(s)
 */
function rrr_get_portfolio_gallery() {
	ob_start(); ?>

	<?php

	// Get gallery of images.
	$images = get_field( 'gallery_images' );
	$size = 'portfolio-archive';

	if ( $images ) : ?>

		<ul class="image-gallery">
			<?php foreach ( $images as $image ) : ?>
			<li class="portfolio-gallery-single">
				<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
			</li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>

	<?php
	return ob_get_clean();
}
