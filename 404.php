<?php get_header(); ?>


<div id="main-container" class="main container clearfix">

<div id="main-wrapper" class="main 404 wrapper clearfix"> <!-- #main -->

	<div class="post clearfix">
		<h3 style="text-align:center">
			No hemos encontrado lo que buscabas.
			<a href="<?php bloginfo('url'); ?>">
				Volver al inicio
			</a>
		</h3>

		<?php get_template_part('recomendado'); ?>

	</div>






</div> <!-- /#main-wrapper -->
</div> <!-- /#main-container -->


	

<!-- #footer -->
<?php get_footer(); ?>
<!-- /#footer -->




<?php get_template_part('subfooter'); ?>