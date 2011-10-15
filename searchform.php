<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
	<input id="searchsubmit" type="image" src="<?php bloginfo('template_directory'); ?>/imagenes/icono-ir.png" value="Buscar"  />
</form>
