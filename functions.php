<?php
// Soporte para widgets en barra lateral y en el footer (3 regiones)
if ( function_exists('register_sidebar') ) {
  register_sidebar(array(
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h2 class="widgettitle">',
    'after_title' => '</h2>',
  ));
  register_sidebar(array('name'=>'footer_izquierda'));
  register_sidebar(array('name'=>'footer_centro'));
  register_sidebar(array('name'=>'footer_derecha'));
   }

// Añadir soporte para "Imagen Destacada"
if (function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails');
	add_image_size('single-post', 500, 250, true);
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image' ) );
	}

add_action( 'init', 'register_my_menus' );
    function register_my_menus() {
    register_nav_menus(
    array(
    'navegacion' => __( 'Navegacion' ),
    'cintilla' => __( 'Cintilla' ),
    )
    );
    }

/**
 * Añadiendo soporte para extractos a las pÃ¡ginas
 * compatible con wp 3.0+
 */
add_post_type_support( 'page', 'excerpt' );

add_filter('init', create_function('$a', 'global $wp_rewrite; $wp_rewrite->author_base = "autor"; $wp_rewrite->flush_rules();'));

?>
