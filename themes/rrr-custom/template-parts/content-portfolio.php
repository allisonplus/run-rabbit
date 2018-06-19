<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Run Rabbit Run
 */

$terms = wp_get_object_terms( $id, 'portfolio_category' );

foreach ( $terms as $term ) {
	$term_single = 'portfolio_category-' . $term->slug;
}
?>

<article <?php post_class(); ?> data-filter=".<?php echo esc_attr( $term_single ); ?>">
	<div class="portfolio-single-shell">
		<div class="portfolio-featured-wrapper">
			<?php echo rrr_get_portfolio_gallery(); // WPCS: XSS OK. ?>
		</div>

		<div class="entry-content">
			<?php
				the_title( '<h2 class="entry-title">', '</h2>' );
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'rrr' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
			?>
		</div><!-- .entry-content -->
	</div>

	<footer class="entry-footer">
		<?php
		the_post_navigation( array(
				'prev_text' => '<h4 class="pre-title">' . __( 'Previous: ', 'rrr' ) . '<span class="title">%title</span></h4>',
				'next_text' => '<h4 class="pre-title">' . __( 'Next: ', 'rrr' ) . '<span class="title">%title</span></h4>',
		) ); ?>
		<?php rrr_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
