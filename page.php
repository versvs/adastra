<?php get_header(); ?>

<!-- #contenido -->
<div id="contenido">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post">
	<div class="titulofecha">
			<h2 class="titulo" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	</div>
	
<div class="main">
	<?php the_content('Read more...?'); ?>
</div>


   </div>

<?php endwhile; else: ?>
<?php include (TEMPLATEPATH . '/404.php'); ?>
<?php endif; ?>


	<!-- #footer -->
    <?php get_footer(); ?>
	<!-- /#footer -->
	
<!-- /#contenido -->
</div>
