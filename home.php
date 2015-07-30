<?php //home.php duplicated index to be blog page ?>
<?php get_header(); ?>

<div class="blog">
  <div class="container">

    <div class="blogContent">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.blogContent -->

    	<?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.blog -->

<?php get_footer(); ?>