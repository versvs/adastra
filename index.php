<?php get_header(); ?>

<!-- #contenido -->
<div id="contenido">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post">
	<div class="titulofecha">
			<h2 class="titulo" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<span class="fecha"><?php the_time('Y-m-d'); ?> <?php _e("@"); ?> <?php the_time('H:i'); ?></span>
			<span class="meta">Publicado por <a href="<?php get_the_author_url(); ?>"><?php the_author(); ?></a>. Archivado en: <?php the_category(',') ?>. <?php the_tags('Etiquetado como: ', ', ', ''); ?> &bull; <?php comments_popup_link('Aún no hay comentarios','1 comentario','% comentarios'); ?> <?php edit_post_link(' &mdash; (¿Editar?)'); ?></span>
	</div>
	
<div class="main">
	<?php the_content('+ Leer el artículo completo'); ?>
</div>


   </div>
    
    <?php if ( comments_open() ) comments_template(); ?>

<?php endwhile; else: ?>
<?php include (TEMPLATEPATH . '/404.php'); ?>
<?php endif; ?>

<div class="paginado">
	<div class="alignleft"><?php next_posts_link('&laquo; Atrás') ?></div>
	<div class="alignright"><?php previous_posts_link('Adelante &raquo;') ?></div>
</div>

	<!-- #footer -->
    <?php get_footer(); ?>
	<!-- /#footer -->
	
<!-- /#contenido -->
</div>


<?php get_template_part('subfooter'); ?>
