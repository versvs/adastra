	<section class="post clearfix">
		<h2 style="text-align:center">
			<?php _e( 'No hemos encontrado lo que buscabas.', 'adastra'); ?>
			<a href="<?php bloginfo('url'); ?>">
				<?php _e( 'Volver al inicio', 'adastra'); ?>
			</a>
		</h2>
		
		<h3><?php _e( 'Puedes hacer una búsqueda...', 'adastra'); ?></h3>
		<?php get_template_part('searchform'); ?>

		<p><?php _e( 'o quizá te interesen los siguientes posts:', 'adastra'); ?></p>
		<aside id="recientes">
			<h3><?php _e( 'Posts recientes', 'adastra'); ?></h3>
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
		</aside>
	
		<aside id="comentados">
			<h3><?php _e( 'Posts más comentados', 'adastra'); ?></h3>
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
		</aside>
	</section>
