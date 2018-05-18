<?php
/**
 * Template part for displaying portfolio posts on their archive page.
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
	<a href="<?php the_permalink(); ?>">
		<header class="entry-header">
			<?php
			if ( has_post_thumbnail() ) {
			    the_post_thumbnail( 'portfolio-archive' );
			}
			?>
			<?php the_title( '<h2 class="cpt-title entry-title">', '</h2>' ); ?>
		</header><!-- .entry-header -->

		<footer class="entry-footer">
			<?php rrr_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</a>
</article><!-- #post-## -->
