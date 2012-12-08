

		<div id="footer-container" class="footer container clearfix">
			<footer id="footer-wrapper" class="footer-wrapper wrapper clearfix">
				<section id="footer" class="clearfix">
					<div class="widget-area izquierda">
							<?php if ( !function_exists('dynamic_sidebar')
								|| !dynamic_sidebar('footer_izquierda') ) : ?>
							<?php endif; ?>
					</div>
					<div class="widget-area centro">
							<?php if ( !function_exists('dynamic_sidebar')
								|| !dynamic_sidebar('footer_centro') ) : ?>
							<?php endif; ?>
					</div>
					<div class="widget-area derecha">
							<?php if ( !function_exists('dynamic_sidebar')
								|| !dynamic_sidebar('footer_derecha') ) : ?>
							<?php endif; ?>
					</div>
				</section>
				<section id="sub-footer" class="sub-footer clearfix wrapper">
					<a href="<?php bloginfo('url'); ?>">
						<?php bloginfo('name'); ?>
					</a>
					&bull;
					<?php _e('Tema', 'adastra'); ?> <a href="http://adastraerrans.com/ad-astra">
							<em>Ad Astra</em>
						  </a>
					<?php _e('por', 'adastra'); ?>
					<a href="http://www.versvs.net/" title="Jose Alcántara" rel="follow">
						Jose Alcántara
					</a>
					<?php _e('para', 'adastra'); ?>
					<a title="Inteligencia y an&aacute;lisis de redes, Madrid" href="http://www.cartograf.net">
						Cartograf
					</a>
					&bull;
					<?php _e('Lees esto gracias a', 'adastra'); ?> <a href="http://wordpress.org">WordPress</a>
				</section>
			</footer>
		</div>


      		<?php wp_footer(); ?> <!-- cierre ordenadito de cosas -->
      		
  </body>
</html>


