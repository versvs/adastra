<?php get_header(); ?>

<div id="main-container" class="main container clearfix">

<div id="main-wrapper" class="main wrapper clearfix"> <!-- #main -->

<section id="contenido" class="contenido alignleft clearfix"> <!-- #contenido -->

	<h1>
		<?php printf( __( 'Resultados de búsqueda para: %s', 'adastra' ), '<span>' . get_search_query() . '</span>' ); ?>
	</h1>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
				<header class="post-info clearfix">
				 	<span class="post-comments alignright">
				 		<a rel="bookmark" title="<?php _e('Comentarios para', 'adastra'); ?> <?php the_title(); ?>" href="<?php echo get_permalink(); ?>#comments">
				 			<?php comments_number('0','1','%'); ?>
				 		</a>
				 	</span>
				 	
					<span class="category-link">
						<?php the_category(' ') ?>
					</span>
					<span class="edit-link">
						<?php edit_post_link(__('Editar', 'adastra')); ?>
					</span>
					
					<a class="post-title" title="<?php _e('Lee', 'adastra'); ?> <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark">
						<h2>
							<?php the_title(); ?>
						</h2>
					</a>
					
					<span class="post-autor">
						<a href="<?php get_the_author_url(); ?>">
							<?php the_author_posts_link() ?>
						</a>
					</span>
						
					<span class="post-date clearfix">
						<a title="<?php _e('Enlace permanente para', 'adastra'); ?> <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark">
							<time pubdate datetime="<?php echo get_the_date('Y-m-d');?>T<?php the_time('H:i'); ?>">
								<?php echo get_the_date(); ?>
								<?php _e("@"); ?>
								<?php the_time('H:i'); ?>
							</time>
						</a>
					</span>

			</header>
	
			<section class="post-content clearfix">
				
				<?php the_excerpt(); ?>
			</section>
	   	</article>
	<?php endwhile; ?>
	
<?php else: ?>
	<?php get_template_part('recomendado'); ?>
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
