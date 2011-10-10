<?php

/**
 * Initialises your theme.
 * We do some work here to register the parent boilerplate skeleton CSS as a dependency of the new theme.
 * This means that the skeleton CSS will only be included when your theme css is.
 *
 * As you go through and rename this example to be your own, it's probably good to rename the function below
 * and hook to something matching your new theme.
 */
function fubloboilerplate_example_init()
{
	// Grab the themes directory
	$theme_directory = get_bloginfo('stylesheet_directory');
	
	// Register styles
	wp_register_style('fubloboilerplate_example_stylesheet', $theme_directory . '/style.css', array('skeleton'), '1.0.0');
	
	// Enqueue styles
	wp_enqueue_style('fubloboilerplate_example_stylesheet');
}
add_action('init', 'fubloboilerplate_example_init');