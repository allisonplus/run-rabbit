<?php //home.php duplicated index to hopefully form blog page ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="blogContent">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.blogContent -->

    	<?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>