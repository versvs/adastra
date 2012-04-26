<?php get_header(); ?>

<!-- #contenido -->
<div id="contenido" class="clearfix">

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

		<div id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
			<div class="post-info clearfix">
					<span class="category">
						<?php the_category(' ') ?>
					</span>
					<span class="edit-link">
						<?php edit_post_link('Editar'); ?>
					</span>
					
					<a href="<?php the_permalink() ?>" rel="bookmark">
						<h2 class="titulo" id="post-<?php the_ID(); ?>">
							<?php the_title(); ?>
						</h2>
					</a>
								
					<span class="post-date clearfix">
						<?php the_date(); ?>
						<?php _e("@"); ?>
						<?php the_time('H:i'); ?>
					</span>
					<span class="bullet">
						&bull;
					</span>
					<span class="post-autor">
						<a href="<?php get_the_author_url(); ?>">
							<?php the_author(); ?>
						</a>
					</span>						
				 	<span class="post-comments">
				 		<?php comments_popup_link('0','1','%'); ?>
				 	</span>
			</div>
	
			<div class="post-content">
				<?php the_content('Continue reading'); ?>
			</div>
			
			<div class="post-tags">
				<?php the_tags('Etiquetas: ', ', ', ''); ?>
			</div>
   	</div>
    
   	<?php if ( comments_open() ) comments_template(); ?>
	
	<?php endwhile; ?>
<?php else: ?>
	<?php get_template_part('404'); ?>
<?php endif; ?>


<?php get_template_part('paginado'); ?>

	<!-- #footer -->
    <?php get_footer(); ?>
	<!-- /#footer -->
	
<!-- /#contenido -->
</div>


<?php get_template_part('subfooter'); ?>
