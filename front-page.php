<?php //front-page ?>
<?php get_header(); ?>

<div class="main clearfix">

    <section class="content">

			<div class="featThumbnail">
				<?php $ifa = get_field('illustration_featured_image'); ?>
				<a href="http://localhost:8888/run-rabbit/illustration/"><img class="feat illus" src="<?php echo $ifa ['sizes']['feat']; ?> " alt="Featured Illustration Thumbnail"></a>
				<h3>Illustration</h3>
			</div>

			<div class="featThumbnail">
				<?php $pfa = get_field('puppetry_featured_image'); ?>
				<a href="http://localhost:8888/run-rabbit/puppets/"><img class="feat puppet" src="<?php echo $pfa ['sizes']['feat']; ?> " alt="Featured Puppet Thumbnail"></a>
				<h3>Puppetry</h3>
			</div>

			<div class="featThumbnail">
				<?php $cfa = get_field('collage_featured_image'); ?>
				<a href="#"><img class="collage feat" src="<?php echo $cfa ['sizes']['feat']; ?> " alt="Featured Collage"></a>
				<h3>Collage</h3>
			</div>

    </section> <!--/.content-->

  <div class="container clearfix">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta eius, laudantium voluptates inventore, amet culpa dolorum porro, quod voluptatibus reiciendis deleniti? Omnis ducimus maiores maxime ratione, placeat quia ea, consectetur rerum esse non sit iure?</p>
			<p>Sunt repellat reiciendis ducimus aliquam saepe neque unde fuga, ea perspiciatis voluptatibus accusantium nihil autem, eveniet inventore quaerat odio non quod voluptate incidunt illum consequuntur nostrum, totam ullam aspernatur molestias. Consequuntur non vel harum amet.</p>
			<p>Esse nam beatae sequi, molestias unde! Voluptatum deleniti ratione enim nihil molestias dolorem eum sed earum! Id distinctio reiciendis deleniti laudantium voluptas, ipsa iusto harum sunt rerum, tempora magnam sequi consequatur sit delectus voluptatibus dolor.</p>
			<p>Tempore accusantium laboriosam, ipsam optio aliquam neque fugiat quibusdam quo culpa nobis, quasi doloribus, eaque omnis aspernatur dolores. Officia repellendus at vel dolorem veritatis reprehenderit ratione sapiente veniam. Placeat neque aut reiciendis, laboriosam molestiae consequatur.</p>
			<p>Nulla consectetur, delectus distinctio ullam. Quas hic suscipit quos aliquam dolore nobis modi quasi nihil eum repellat a tempora non distinctio atque odio, libero iure earum temporibus accusantium rerum nisi sequi dolorum nostrum. Ipsa, totam.</p>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>