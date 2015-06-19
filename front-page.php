<?php //front-page ?>
<?php get_header(); ?>

<div class="main clearfix">
  <div class="container clearfix">

    <section class="content">

			<?php $ifa = get_field('illustration_featured_image'); ?>
			<a href="http://localhost:8888/run-rabbit/illustration/"><img class="feat illus" src="<?php echo $ifa ['sizes']['feat']; ?> " alt="Featured Illustration Thumbnail"></a>

			<?php $pfa = get_field('puppetry_featured_image'); ?>
			<a href="http://localhost:8888/run-rabbit/puppets/"><img class="feat puppet" src="<?php echo $pfa ['sizes']['feat']; ?> " alt="Featured Puppet Thumbnail"></a>

			<?php $cfa = get_field('collage_featured_image'); ?>
			<a href="#"><img class="collage feat" src="<?php echo $cfa ['sizes']['feat']; ?> " alt="Featured Collage"></a>

    </section> <!--/.content-->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>