<?php get_header(); ?>

<div class="theta">
  <div class="container">
      <h2>Category Archives: <?php single_cat_title(); ?></h2>
    <div class="content">

    	<?php
    		$category_description = category_description();
    		if ( ! empty( $category_description ) )
    			echo '' . $category_description . '';
    	   get_template_part( 'loop', 'category' );
        ?>

    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.beta -->

<?php get_footer(); ?>