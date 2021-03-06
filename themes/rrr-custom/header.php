<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Run Rabbit Run
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php global $is_IE; if ( $is_IE ) : ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<?php endif; ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<span class="svg-defs"><?php rrr_include_svg_icons(); ?></span>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'rrr' ); ?></a>

	<header class="site-header">
		<div class="wrap">

			<div class="site-branding">
				<?php if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif; ?>
				<div class="hex-container">
					<div class="hex hex-one"></div>
					<div class="hex hex-two"></div>
					<div class="hex hex-three"></div>
					<div class="hex hex-four"></div>
				</div>
			</div><!-- .site-branding-->

			<button class="sliding-panel-button mobile-menu-toggle" type="button">
				<span class="mobile-menu-bar line-1"></span>
				<span class="mobile-menu-bar line-2"></span>
				<span class="mobile-menu-bar line-3"></span>
				<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'rrr' ); ?></span>
			</button>

			<div class="navigation-wrapper sliding-panel-content header-mobile">

				<nav id="site-navigation" class="main-navigation">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_id'        => 'primary-menu',
							'menu_class'     => 'menu menu-vertical main-menu',
						) );
					?>
				</nav><!-- #site-navigation -->
			<?php echo rrr_get_social_links(); // WPCS: XSS OK. ?>
			</div>


		</div><!-- .wrap -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
