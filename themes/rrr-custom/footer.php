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
				<?php echo rrr_get_footer_social_links(); // WPCS: XSS OK. ?>
			</div>
		</div><!-- .wrap -->
	</footer><!-- .site-footer -->
</div><!-- #page -->

<?php rrr_do_mobile_navigation_menu(); ?>

<?php wp_footer(); ?>

</body>
</html>
