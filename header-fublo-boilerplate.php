<!DOCTYPE html>
<html lang='en'>
	<head>
		<title><?php
	/*
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
		echo ' | ' . sprintf( __( 'Page %s', 'fublo-boilerplate' ), max( $paged, $page ) );

	?></title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
		<!--[if lt IE 9]><script type='text/javascript' src='<?php bloginfo('template_url'); ?>/assets/javascript/html5.js'></script><![endif]-->
		<?php wp_head(); ?>
	</head>
	
	<body>