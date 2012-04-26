<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

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
	

<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>
<?php wp_head(); ?>
</head>
<body>

<div id="cintilla-container" class="container clearfix">
	<ul class="cintilla-wrapper" class="wrapper clearfix">
		<?php wp_nav_menu( array( 'theme_location' => 'cintilla' ) ); ?>
	</ul>
</div>


<div id="header-container" class="container clearfix">
	<div id="header-wrapper" class="header wrapper clearfix">
		<div id="busqueda">
			<?php get_search_form(); ?>
		</div>
	
		<div id="branding" class="branding">
			<a href="<?php bloginfo('url'); ?>">
				<h1>
					<?php bloginfo('name'); ?>
				</h1>
			</a>
			<h4>
				<?php bloginfo('description'); ?>
			</h4>
		</div>
		
		<div id="nav">
			<ul class="nav">
				<?php wp_nav_menu( array( 'theme_location' => 'navegacion' ) ); ?>
			</ul>
		</div>
	</div> <!-- /#header-wrapper -->
</div> <!-- /#header-container -->

