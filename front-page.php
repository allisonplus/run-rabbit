<?php //front-page ?>
<?php get_header(); ?>

<div class="main clearfix">
  <div class="container clearfix">

    <section class="content">

			<?php $ifa = get_field('illustration_featured_image'); ?>
			<img src="<?php echo $ifa ['sizes']['square']; ?> " alt="">

			<?php $pfa = get_field('puppetry_featured_image'); ?>
			<img src="<?php echo $pfa ['sizes']['square']; ?> " alt="">

			<?php $cfa = get_field('collage_featured_image'); ?>
			<img src="<?php echo $cfa ['sizes']['square']; ?> " alt="">

    </section> <!--/.content-->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>