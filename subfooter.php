<div id="subfooter" class="clearfix">

	<div id="subfooter-wrapper">
	   <div class="widget">
			<div class="interior">
				<?php if ( !function_exists('dynamic_sidebar')
					|| !dynamic_sidebar('subfooterizquierda') ) : ?>
				<?php endif; ?>
			</div>
		</div>

		<div class="widget">
			<div class="interior">
				<?php if ( !function_exists('dynamic_sidebar')
					|| !dynamic_sidebar('subfootercentro') ) : ?>
				<?php endif; ?>
	    	</div>
		</div>

		<div class="widget">
			<div class="interior">
				<?php if ( !function_exists('dynamic_sidebar')
					|| !dynamic_sidebar('subfooterderecha') ) : ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

</div>

   
   <?php wp_footer(); ?> 
    
</body>
</html>
