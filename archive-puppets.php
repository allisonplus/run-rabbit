<?php get_header(); ?>

<div class="beta">
  <div class="container">
    <h2>Puppets</h2>
    <div class="content">


    <?php

    $puppetQuery = new WP_Query(
      array(
        'posts_per_page' => -1,
        'post_type' => 'puppets',
        'order' => 'ASC'
        )
    ); ?>

    <?php if ( $puppetQuery->have_posts() ) : ?>

            <?php while ($puppetQuery->have_posts()) : $puppetQuery->the_post(); ?>

            <div class="puppet-ind">
              <?php echo get_the_post_thumbnail( $post->ID); ?> 
              <?php $pp = get_field('puppet_photo'); ?>
              <img src="<?php echo $pp['sizes']['square']; ?> " alt="">
              <a href="<?php the_permalink(); ?>">
              <h2><?php the_title(); ?></h2>
              </a>
            </div> <!--/.puppet-ind-->
            
            <?php endwhile; ?>
            
            <?php wp_reset_postdata(); ?>
            
          <?php else:  ?>
            

          <?php endif; ?>

    </div><!--/content-->

  </div> <!-- /.container -->
</div> <!-- /.beta -->

<?php get_footer(); ?>