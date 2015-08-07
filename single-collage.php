<?php get_header(); ?>

<div class="beta">
  <div class="container">

    <div class="singleContent">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <?php $pp = get_field('collage_photo'); ?>

          <img src="<?php echo $pp['sizes']['full-size']; ?> " alt="Full-size Collage">

          <div class="archiveContent">
            <h2 class="entry-title"><?php the_title(); ?></h2>
            <!-- <h4>Mediums Utilized</h4> -->
            <ul class="mediumsSingle">
                <?php $taxonomyItems = get_the_terms($post->ID, 'material', '', ',', '');
                //performs one time for each taxonomy item
                foreach ($taxonomyItems as $taxonomyItem) {
                  // prints the taxonomy name wrapped in a list item
                  echo '<li>'.$taxonomyItem->name.'</li>';
                 };
                ?>
            </ul> <!--/.mediumsSingle-->
          </div> <!--/.archiveContent-->

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->


        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.singleContent -->

  </div> <!-- /.container -->
</div> <!-- /.beta -->

<?php get_footer(); ?>