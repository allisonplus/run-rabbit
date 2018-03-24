<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Run Rabbit Run
 */

?>

	</div><!-- #content -->

	<footer class="site-footer">
		<div class="wrap">
			<div class="site-info">
				<?php rrr_do_copyright_text(); ?>
				<?php echo rrr_do_build_text(); // WPCS: XSS OK. ?>
			</div>
		</div><!-- .wrap -->
	</footer><!-- .site-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
