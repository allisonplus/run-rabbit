<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">

			<div class="about-50">
        <div class="bio">
        <h2><?php the_title(); ?></h2>
        	<p><?php the_field('artist_biography'); ?></p>
        </div> <!--/.bio-->
        <ul class="contact-icons">
          <li><a href="<?php the_field('instagram'); ?>"><i class="fa fa-instagram"></i></a></li>
          <li><a href="<?php the_field('linkedin'); ?>"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="mailto:<?php the_field('email_address'); ?>"><i class="fa fa-envelope-o"></i></a></li>
        </ul> <!--/.contact-icons-->
    	</div> <!--/.about-50-->

			<div class="about-50">
				<div class="photo clearfix">
				    <?php $bio = get_field('artists_photo'); ?>
				    <img src="<?php echo $bio['sizes']['artist']; ?> " alt="">
				</div> <!--/.photo-->
       </div> <!--/.about-50-->

    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>