<?php get_header(); ?>

<div id="contenido">
	<div class="post">
		<h3 style="text-align:center">
			No hemos encontrado lo que buscabas.
			<a href="<?php bloginfo('url'); ?>">
				Volver al inicio
			</a>
		</h3>

		<?php get_template_part('searchform'); ?>

	</div>

	
	<?php get_footer(); ?>


</div>


<?php get_template_part('subfooter'); ?>