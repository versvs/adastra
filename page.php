<?php get_header(); ?>

<div id="main-container" class="main container clearfix">

<div id="main-wrapper" class="main wrapper clearfix"> <!-- #main -->

<div id="contenido" class="contenido alignleft clearfix"> <!-- #contenido -->


<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<div class="post">
		<div class="post-info clearfix">
			<a class="post-title" href="<?php the_permalink() ?>" rel="bookmark">
				<h2>
					<?php the_title(); ?>
				</h2>
			</a>
		</div>
	
			<div class="post-content clearfix">
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="post-thumbnail">
						<?php the_post_thumbnail('single-post') ?>
					</div>
				<?php endif; ?>
				
				<?php the_content(); ?>
						
			</div>

	</div>

	<?php endwhile; ?>
<?php else: ?>
	<?php get_template_part('404'); ?>
<?php endif; ?>




<!-- /#contenido -->
</div>


<?php get_template_part('sidebar'); ?>


</div> <!-- /#main-wrapper -->
</div> <!-- /#main-container -->



<!-- #footer -->
<?php get_footer(); ?>
<!-- /#footer -->




	<?php get_template_part('subfooter'); ?>


