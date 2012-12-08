<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<base href="<?php bloginfo('url'); ?>">

<title><?php
	/*
	 * Este código para el título está copiado de Twentyeleven, el tema por defecto de Wordpress
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );

	?></title>
	
<?php //multitud de formatos de feed, rss 0.92 podría quitarse, la verdad, y atom también... pero bueno ?>
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php echo get_feed_link( 'rss2' ); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php echo get_feed_link( 'rss' ); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php echo get_feed_link( 'atom' ); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>


<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.min-1.8.3.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.autogrow.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js"></script>

<!--[if lt IE 9]>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/html5.js"></script>
<![endif]-->


<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="nav-container" class="nav container clearfix">
	<nav id="nav" class="wrapper clearfix">
			<?php wp_nav_menu( array( 'theme_location' => 'navegacion' ) ); ?>
	</nav>
</div>

<div id="header-container" class="container clearfix">
	<header id="header-wrapper" class="header wrapper clearfix">
		<div id="busqueda">
			<?php get_search_form(); ?>
		</div>
	
		<hgroup id="branding" class="branding">
			<a href="<?php bloginfo('url'); ?>">
				<h1><?php bloginfo('name'); ?></h1>
			</a>
			<h4><?php bloginfo('description'); ?></h4>
		</hgroup>
	</header> <!-- /#header-wrapper -->
</div> <!-- /#header-container -->

