<?php get_header(); ?>

<div id="contenido" class="404">
	<div class="post clearfix">
		<h3 style="text-align:center">
			No hemos encontrado lo que buscabas.
			<a href="<?php bloginfo('url'); ?>">
				Volver al inicio
			</a>
		</h3>

		<h3>Puedes hacer una búsqueda...</h3>
		<?php get_template_part('searchform'); ?>

		<h3>o quizá te interesen los siguientes posts:</h3>
		<div id="recientes">
			<h3>Posts recientes</h3>
			<ul>
				<?php
					global $post;
					$args = array( 'numberposts' => 7);
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
	
		<div id="comentados">
			<h3>Posts más comentados</h3>
			<ul>
				<?php
					global $post;
					$args = array( 'numberposts' => 7, 'orderby' => 'comment_count');
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

	</div>

	
	<?php get_footer(); ?>


</div>


<?php get_template_part('subfooter'); ?>