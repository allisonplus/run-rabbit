<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Run Rabbit Run
 */

get_header(); ?>

	<div class="wrap">
		<div class="primary content-area">
			<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
					?>
				</header><!--.page-header-->

				<?php // get_template_part( 'template-parts/portfolio', 'filter' ); ?>

				<section class="coming-soon">
					<h2><?php esc_html_e( 'Coming Soon', 'rrr' ); ?></h2>
					<img class="coming-soon" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/rrr-coming-soon.jpg' ); ?>" alt="">

					<div class="hex-container">
						<div class="hex hex-one"></div>
						<div class="hex hex-two"></div>
						<div class="hex hex-three"></div>
						<div class="hex hex-four"></div>
					</div>
				</section>

				<div class="article-wrapper wrap">
				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					// get_template_part( 'template-parts/portfolio', 'archive' );

				endwhile; ?>

				</div><!--article-wrapper-->
				<?php

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

			</main><!-- #main -->
		</div><!-- .primary -->
	</div><!-- .wrap -->

<?php get_footer(); ?>
