<?php get_header(); ?>

<div id="main-container" class="main container clearfix">

<div id="main-wrapper" class="main wrapper clearfix"> <!-- #main -->

<section id="contenido" class="contenido alignleft clearfix"> <!-- #contenido -->

<?php $autor = get_user_by( 'slug', get_query_var( 'author_name' ) ); ?>

<article id="author-<?php echo the_author_meta($autor->ID); ?>" class="author clearfix post">
	<header>
		<h1 class="page-title author">
			<?php echo $autor->display_name; ?>
		</h1>
	</header>
	<aside>
		<dl>
			<dd><? _e('URL: ', 'adastra'); ?></dd><dt><?php echo $autor->user_url; ?></dt>
			<dd><? _e('Posts published: ', 'adastra'); ?></dd><dt><?php echo count_user_posts($autor->ID); ?></dt>
		</dl>
	</aside>
	<section>
		<?php echo $autor->description; ?>
	</section>
</article>

<article id="recent-posts-by-author" class="recent-posts-by post clearfix">
	<header>
		<h2><?php _e('Recent posts by ', 'adastra')?><?php echo $autor->display_name; ?></h2>
	</header>
	<section>
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

				<a class="post-title" title="Lee <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark">
					<h3>
						<?php the_title(); ?>
					</h3>
				</a>
			<?php endwhile; ?>
		<?php else: ?>
			<?php _e('This user has not published a post... yet :)', 'adastra')?>
		<?php endif; ?>
	</section>
</article>

<?php get_template_part('paginado'); ?>


<!-- /#contenido -->
</section>


<?php get_template_part('sidebar'); ?>


</div> <!-- /#main-wrapper -->
</div> <!-- /#main-container -->


	<!-- #footer -->
    <?php get_footer(); ?>
	<!-- /#footer -->
