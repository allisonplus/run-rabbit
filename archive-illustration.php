<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="content">

    <h1>Illustrations, wheeee</h1>

      <?php

          $illustrationQuery = new WP_Query(
            array(
              'posts_per_page' => -1,
              'post_type' => 'illustration',
              'order' => 'ASC'
              )
          ); ?>

          <?php if ( $illustrationQuery->have_posts() ) : ?>

                  <?php while ($illustrationQuery->have_posts()) : $illustrationQuery->the_post(); ?>

                  <div class="illustration-ind">
                    <?php echo get_the_post_thumbnail( $post->ID); ?> 
                    <?php $pp = get_field('photo'); ?>
                    <img src="<?php echo $pp['sizes']['square']; ?> " alt="">
                    <a href="<?php the_permalink(); ?>">
                    <h2><?php the_title(); ?></h2>
                    </a>
                  </div> <!--/.illustration-ind-->
                  
                  <?php endwhile; ?>
                  
                  <?php wp_reset_postdata(); ?>
                  
                <?php else:  ?>
                  
                <?php endif; ?>

    </div><!--/content-->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>