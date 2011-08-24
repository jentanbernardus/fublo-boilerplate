<?php

/**
 * Enqueues all required scripts and styles
 */
function fublo_boilerplate_init()
{
	// Only do this if we are not in the admin panel
	if (!is_admin())
	{
		// Get the template URL
		$template_url = get_bloginfo('template_url');
		
		// Register scripts
		wp_register_script('fublo_boilerplate_html5_shim', $template_url . '/html5.js');
		
		// Register styles
		wp_register_style('fublo_boilerplate_skeleton_base', $template_url . '/skeleton/stylesheets/base.css');
		wp_register_style('fublo_boilerplate_skeleton_skeleton', $template_url . '/skeleton/stylesheets/skeleton.css');
		wp_register_style('fublo_boilerplate_skeleton_layout', $template_url . '/skeleton/stylesheets/layout.css');
		
		// Remove unwanted things from wp_head()
		remove_action('wp_head', 'rsd_link');
		remove_action('wp_head', 'wlwmanifest_link');
		remove_action('wp_head', 'index_rel_link');
		remove_action('wp_head', 'wp_generator');
		remove_action('wp_head', 'rel_canonical');
		remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
		remove_action('wp_head', 'index_rel_link');
		remove_action('wp_head', 'feed_links_extra', 3);
		remove_action('wp_head', 'feed_links', 2);
		remove_action('wp_head', 'parent_post_rel_link', 10, 0);
		remove_action('wp_head', 'start_post_rel_link', 10, 0);
		remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
		wp_deregister_script('l10n');
		
		// Enqueue the scripts
		wp_enqueue_script('fublo_boilerplate_html5_shim');
		
		// Enqueue the styles
		wp_enqueue_style('fublo_boilerplate_skeleton_base');
		wp_enqueue_style('fublo_boilerplate_skeleton_skeleton');
		wp_enqueue_style('fublo_boilerplate_skeleton_layout');
	}
}

// Hook into the initialisation
add_action('init', 'fublo_boilerplate_init');