<?php get_header(); ?>

<div class="beta">
  <div class="container">
    <h2>Collage & Assemblage</h2>
    <h3>Papers, glitter, drawings, paintings, wood, nails, maps & wire</h3>
    <div class="content">

      <?php

        $collageQuery = new WP_Query(
          array(
            'posts_per_page' => -1,
            'post_type' => 'collage',
            'order' => 'ASC'
            )
        ); ?>

          <?php if ( $collageQuery->have_posts() ) : ?>

                  <?php while ($collageQuery->have_posts()) : $collageQuery->the_post(); ?>

                  <div class="collage-ind">
                    <?php echo get_the_post_thumbnail( $post->ID); ?> 
                    <?php $pp = get_field('photo'); ?>
                    <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo $pp['sizes']['square']; ?>" alt="">
                    </a>
                  </div> <!--/.collage-ind-->
                  
                  <?php endwhile; ?>
                  
                  <?php wp_reset_postdata(); ?>
                  
                <?php else:  ?>
                  
                <?php endif; ?>

    </div><!--/content-->

  </div> <!-- /.container -->
</div> <!-- /.beta-->

<?php get_footer(); ?>