<?php get_header(); ?>

<div id="main-container" class="main container clearfix">

<div id="main-wrapper" class="main wrapper clearfix"> <!-- #main -->

<div id="contenido" class="contenido alignleft clearfix"> <!-- #contenido -->

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
							<?php the_author_posts_link() ?>
						</a>
					</span>						
				 	<span class="post-comments">
				 		<a rel="bookmark" href="<?php echo get_permalink(); ?>#comments">
				 			<?php comments_number('0','1','%'); ?>
				 		</a>
				 	</span>
			</div>
	
			<div class="post-content clearfix">
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="post-thumbnail">
						<?php the_post_thumbnail('thumbnail') ?>
					</div>
				<?php endif; ?>
				
				<?php the_content(); ?>
		<!-- esto no lo estamos usando si mostramos todo el contenido
				<?php //the_excerpt(); ?>				
				<span class="leer-mas alignright">
					<a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s'), get_the_title() ) ?>">
						<?php _e('Leer +') ?>
					</a>
				</span>				
		aquí terminamos de comentar lo que no queremos usar -->
			</div>
			
			<div class="post-tags clearfix">
				<?php the_tags('Etiquetas: ', ', ', ''); ?>
			</div>
   	</div>
	<?php endwhile; ?>
	
<?php else: ?>
	<?php get_template_part('404'); ?>
<?php endif; ?>


<?php get_template_part('paginado'); ?>


<!-- /#contenido -->
</div>


<?php get_template_part('sidebar'); ?>


</div> <!-- /#main-wrapper -->
</div> <!-- /#main-container -->


	<!-- #footer -->
    <?php get_footer(); ?>
	<!-- /#footer -->


<?php get_template_part('subfooter'); ?>
