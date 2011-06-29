<?php get_header(); ?>

<!-- #contenido -->
<div id="contenido">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post">
	<div class="titulofecha">
		<div class="titulo">
			<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		</div>
		<div class="fecha">
			<?php the_time('Y-m-d'); ?> <?php _e("@"); ?> <?php the_time('H:i'); ?>
		</div>
	</div>
	
<div class="main">
	<?php the_content('Read more...?'); ?>
</div>
<div class="meta">Publicado por <a href="mailto:<?php echo antispambot(get_the_author_email()); ?>"><?php the_author(); ?></a>. Filled under: <?php the_category(',') ?> <?php the_tags('Tags: ', ', ', ''); ?> &bull; <?php comments_popup_link('No Comments','1 Comment','% Comments'); ?> <?php edit_post_link(' &mdash; (Edit this?)'); ?></div>

   </div>
    
    <?php if ( comments_open() ) comments_template(); ?>

<?php endwhile; else: ?>
<?php include (TEMPLATEPATH . '/404.php'); ?>
<?php endif; ?>

<div class="navigation_group">
	<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
	<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
</div>

	<!-- #footer -->
    <?php get_footer(); ?>
	<!-- /#footer -->
	
<!-- /#contenido -->
</div>



    
