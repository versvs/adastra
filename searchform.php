<?php
/**
 * The template for displaying search forms in Twenty Eleven
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<label for="s">Búsqueda</label>
	<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
	<input id="searchsubmit" type="image" src="<?php bloginfo('template_directory'); ?>/imagenes/icono-ir.png" value="Buscar"  />
</form>
