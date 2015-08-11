<?php get_header(); ?>

<div class="theta">
  <div class="container">
		<h2 class="tagTitle">Tag Archives: <?php single_tag_title(); ?></h2>
    <div class="content">
      <?php get_template_part( 'loop', 'tag' ); ?>
    </div> <!-- /.content -->

  </div><!-- /.container -->
</div><!-- /.main -->

<?php get_footer(); ?>