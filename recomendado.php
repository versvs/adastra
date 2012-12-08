	<section class="post clearfix">
		<h2 style="text-align:center">
			<?php _e( 'No hemos encontrado lo que buscabas.'); ?>
			<a href="<?php bloginfo('url'); ?>">
				<?php _e( 'Volver al inicio'); ?>
			</a>
		</h2>
		
		<h3><?php _e( 'Puedes hacer una búsqueda...'); ?></h3>
		<?php get_template_part('searchform'); ?>

		<p><?php _e( 'o quizá te interesen los siguientes posts:'); ?></p>
		<aside id="recientes">
			<h3><?php _e( 'Posts recientes'); ?></h3>
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
			<h3><?php _e( 'Posts más comentados'); ?></h3>
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
