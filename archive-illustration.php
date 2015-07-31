<?php get_header(); ?>

<div class="beta">
  <div class="container">
    <h2>Illustrations</h2>
    <h3>Black & White or Colour, Sketchy or Finished, Animal or People or...?!</h3>
    <div class="content">

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
                    <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo $pp['sizes']['square']; ?>" alt="">
                    </a>
                  </div> <!--/.illustration-ind-->
                  
                  <?php endwhile; ?>
                  
                  <?php wp_reset_postdata(); ?>
                  
                <?php else:  ?>
                  
                <?php endif; ?>

    </div><!--/content-->

  </div> <!-- /.container -->
</div> <!-- /.beta-->

<?php get_footer(); ?>