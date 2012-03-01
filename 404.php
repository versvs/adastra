<?php get_header(); ?>

<div id="contenido">
	<div class="post clearfix">
		<h3 style="text-align:center">
			No hemos encontrado lo que buscabas.
			<a href="<?php bloginfo('url'); ?>">
				Volver al inicio
			</a>
		</h3>

		<?php get_template_part('searchform'); ?>

	<ul>
		<?php
			global $post;
			$args = array( 'numberposts' => 5);
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :	setup_postdata($post); ?>
				<li>
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</li>
		<?php endforeach; ?>
	</ul>


	</div>

	
	<?php get_footer(); ?>


</div>


<?php get_template_part('subfooter'); ?>