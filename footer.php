

		<div id="footer-container" class="footer container clearfix">
			<div id="footer-wrapper" class="footer-wrapper wrapper clearfix">
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
			</div>
			<div id="sub-footer" class="sub-footer clearfix wrapper">
				<a href="<?php bloginfo('url'); ?>">
					<?php bloginfo('name'); ?>
				</a>
				&bull;
				Tema <a href="http://adastraerrans.com/ad-astra">
						<em>Ad Astra</em>
					  </a>
				por
				<a href="http://www.versvs.net/" title="Jose Alcántara" rel="follow">
					Jose Alc&aacute;ntara
				</a>
				para
				<a title="Inteligencia y an&aacute;lisis de redes, Madrid" href="http://www.cartograf.net">
					Cartograf
				</a>
				&bull;
				Lees esto gracias a <a href="http://wordpress.org">WordPress</a>
			</div>
		</div>


      		<?php wp_footer(); ?> <!-- cierre ordenadito de cosas -->
      		
  </body>
</html>


