<?php get_header(); ?>


<div id="main-container" class="container clearfix">

<div id="main-wrapper" class="search wrapper clearfix"> <!-- #main -->

<div id="main" class="main search-page posts alignleft clearfix">




  
  <div class="searchpanel">
    <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
      <div id="search">
        <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="Buscar" />
      </div>
    </form>
  </div>

  <h2><?php _e('Search Results'); ?></h2>

  
    	<?php if (have_posts()) : ?>

    		<?php while (have_posts()) : the_post(); ?>

<?php		if ( $iteracion==1 ) { ?>
					<div <?php post_class('primero clearfix'); ?> id="post-<?php the_ID(); ?>">
				<?php } elseif( $iteracion==2) { ?>
					<div <?php post_class('ultimo clearfix'); ?> id="post-<?php the_ID(); ?>">
				<?php } else { ?>
					<div <?php post_class('clearfix'); ?> id="post-<?php the_ID(); ?>">
				<?php } ?>



						<?php if ( has_post_thumbnail() ) : ?>
							<div class="post-thumbnail">
								<a href="<?php the_permalink() ?>" title="Leer <?php the_title(); ?>" rel="bookmark">
									<?php the_post_thumbnail('portada') ?>
								</a>
							</div>
						<?php endif; ?>					
						<div class="post-content">
						
				<?php edit_post_link(__('Edit')); ?>

						<h2 class="post-title">
							<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark">
								<?php the_title(); ?>
							</a>
						</h2>
						<div class="post-meta clearfix">
							<span class="post-autor">
								Por <?php the_author_posts_link() ?>
							</span>
							<span class="bullet">
								|
							</span>
							<span class="category-link">
								<?php the_category(' '); ?>						
							</span>
							<span class="bullet">
								|
							</span>						
							<span class="post-date">
								<?php echo get_the_date(); ?>
							</span>

							<span class="post-comments alignright">
								<a rel="bookmark" href="<?php echo get_permalink(); ?>#comments"><?php comments_number( 'sin comentarios', 'un comentario', '% comentarios' ); ?></a>
							</span>
						</div>						
							<div class="post-excerpt">
								<?php the_excerpt() ?>
								<span class="leer-mas alignright">
									<a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'arras'), get_the_title() ) ?>">
										<?php _e('Ver +', 'arras') ?>
									</a>
								</span>
							</div>
						</div>
					<?php get_template_part('compartir'); ?>
					</div>





<?php
$iteracion = $iteracion + 1;
endwhile;

// Reset Post Data
wp_reset_postdata();

?>


	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>



			<!-- enlaces de navegacion anterior-siguientes -->			
			<?php if (will_paginate()): ?>
				<?php get_template_part('navegacion'); ?>
			<?php endif; ?>


</div>

	<?php get_template_part('sidebar'); ?>	



</div> <!-- /#main-wrapper -->
</div> <!-- /#main-container -->


	

<!-- #footer -->
<?php get_footer(); ?>
<!-- /#footer -->
