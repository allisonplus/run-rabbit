<?php
/**
 * Template part for displaying the filter for the portfolio grid.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Run Rabbit Run
 */

?>

<div class="button-group filter-button-group">
	<p class="filter-instruct"><?php esc_html_e( 'Sort by', 'rrr' ); ?></p>

	<ul class="filter-list portfolio-cat-list">
		<?php echo rrr_show_tax_list(); // WPCS: XSS OK. ?>

		<li class="term-single"><button class="filter is-checked" data-filter="*">
			<span><?php esc_html_e( 'Show All', 'rrr' ); ?></span>
		</button></li>
	</ul>
</div><!-- .button-group -->
