<?php //home.php as blog page ?>
<?php get_header(); ?>

<div class="betaBlog">
  <!-- <div class="container">  -->

    <div class="blogContent">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.blogContent -->

    <?php get_sidebar(); ?>

  <!-- </div> --> <!-- /.container -->
</div> <!-- /.betaBlog -->

<?php get_footer(); ?>