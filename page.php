<?php get_header(); ?>

<!-- #contenido -->
<div id="contenido">

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<div class="post">
		<div class="titulofecha">
				<h2 class="titulo" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		</div>
	
		<div class="main">
			<?php the_content('+ Leer el artículo completo'); ?>
		</div>


	</div>

	<?php endwhile; ?>
<?php else: ?>
	<?php get_template_part('404'); ?>
<?php endif; ?>


<!-- #footer -->
<?php get_footer(); ?>
<!-- /#footer -->
	
<!-- /#contenido -->
</div>


<div id="subfooter">

	<?php get_template_part('subfooter'); ?>

</div>
