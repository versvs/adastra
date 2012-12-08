<?php get_header(); ?>


<div id="main-container" class="main container clearfix">

<div id="main-wrapper" class="main wrapper clearfix"> <!-- #main -->

<section id="contenido" class="contenido alignleft clearfix"> <!-- #contenido -->

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
			<header class="post-info clearfix">
				 	<span class="post-comments alignright">
				 		<a rel="bookmark" href="<?php echo get_permalink(); ?>#comments">
				 			<?php comments_number('0','1','%'); ?>
				 		</a>
				 	</span>
				 	
					<span class="category-link">
						<?php the_category(' ') ?>
					</span>
					<span class="edit-link">
						<?php edit_post_link('Editar'); ?>
					</span>
					
					<a class="post-title" href="<?php the_permalink() ?>" rel="bookmark">
						<h2>
							<?php the_title(); ?>
						</h2>
					</a>
					
					<span class="post-autor">
						<a title="<?php _e('Página del autor'); ?>" href="<?php get_the_author_url(); ?>">
							<?php the_author_posts_link() ?>
						</a>
					</span>
						
					<span class="post-date clearfix">
						<a title="<?php _e('Enlace permanente para'); ?> <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark">
							<time pubdate datetime="<?php echo get_the_date('Y-m-d');?>T<?php the_time('H:i'); ?>">
								<?php echo get_the_date(); ?>
								<?php _e("@"); ?>
								<?php the_time('H:i'); ?>
							</time>
						</a>
					</span>

			</header>
	
			<section class="post-content clearfix">
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="post-thumbnail">
						<?php the_post_thumbnail('single-post') ?>
					</div>
				<?php endif; ?>
				
				<?php the_content(); ?>
						
			</section>
			
			<aside class="post-tags clearfix">
				<?php the_tags(_e('Etiquetas: '), ', ', ''); ?>
			</aside>
   	</article>
    
   	<?php comments_template(); ?>
	
	<?php endwhile; ?>
<?php else: ?>
	<?php get_template_part('404'); ?>
<?php endif; ?>


<?php get_template_part('paginado'); ?>
	

<!-- /#contenido -->
</section>


<?php get_template_part('sidebar'); ?>


</div> <!-- /#main-wrapper -->
</div> <!-- /#main-container -->



	<!-- #footer -->
    <?php get_footer(); ?>
	<!-- /#footer -->

<?php get_template_part('subfooter'); ?>
