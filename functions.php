<?php
// Añadir soporte para widgets en barra lateral (LOL el blog no tiene barra lateral) y en el footer (3 regiones)
    if ( function_exists('register_sidebar') )
    register_sidebar(array(
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h2 class="widgettitle">',
    'after_title' => '</h2>',
    ));
    register_sidebar(array('name'=>'subfooterizquierda'));
    register_sidebar(array('name'=>'subfootercentro'));
    register_sidebar(array('name'=>'subfooterderecha'));
// Añadir soporte para "Imagen Destacada"
if (function_exists('add_theme_support')) {
add_theme_support('post-thumbnails');
add_image_size('index-categories', 150, 150, true);
add_image_size('page-single', 620, 290, true);
}
?>
