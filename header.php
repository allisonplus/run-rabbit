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
  <link href='http://fonts.googleapis.com/css?family=Muli|Playfair+Display+SC:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- <link rel="icon" href="images/favicon.ico" type="image/x-icon" /> -->

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>


<header>
  
  <?php if( is_front_page() ) : ?>
  <div class="hero">
    <h1><a class="title" href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?></a>
    </h1>
  </div> <!--/.hero-->

  <?php endif; ?>

  <nav>
    <?php wp_nav_menu( array(
      'container' => false,
      'theme_locations' => 'primary'
    )); ?>
  </nav>

    <!-- <a class="menuIcon" href="#" aria-label="Toggle Navigation">☰ Menu</a> -->

</header><!--/.header-->