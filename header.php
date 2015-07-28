<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500|Rock+Salt' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- <link rel="icon" href="images/favicon.ico" type="image/x-icon" /> -->

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="hero">
    <img src="<?php bloginfo('template_url'); ?>/assets/howl1.jpg">
    <h1>
      <a class="title" href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1>
    <img src="<?php bloginfo('template_url'); ?>/assets/howl2.jpg">
  </div> <!--/.hero-->

    <!-- <a class="menuIcon" href="#" aria-label="Toggle Navigation">☰ Menu</a> -->

  <div class="nav">
  <?php wp_nav_menu( array(
    'container' => false,
    'theme_locations' => 'primary'
  )); ?>
  </div> <!--/.nav-->

</header><!--/.header-->