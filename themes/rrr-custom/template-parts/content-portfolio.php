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
	<header class="entry-header">
		<?php
		if ( has_post_thumbnail() ) {
		    the_post_thumbnail( 'portfolio-archive' );
		}
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'rrr' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'rrr' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php rrr_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
