<?php

/**
 * Enqueues skeleton and cleans up wp_head
 */
function fublo_boilerplate_init()
{
	// Only do this if we are not in the admin panel
	if (!is_admin())
	{
		// Get the template URL
		$template_url = get_bloginfo('template_url');
		
		// Register styles
		wp_register_style('fublo_boilerplate_reset', $template_url . '/960/code/css/min/reset.css');
		wp_register_style('fublo_boilerplate_text', $template_url . '/960/code/css/min/text.css');
		wp_register_style('fublo_boilerplate_960', $template_url . '/960/code/css/min/960.css');
		wp_register_style('fublo_boilerplate_960_responsive', $template_url . '/960-responsive/style.css');
		
		// Enqueue styles
		wp_enqueue_style('fublo_boilerplate_reset');
		wp_enqueue_style('fublo_boilerplate_text');
		wp_enqueue_style('fublo_boilerplate_960');
		wp_enqueue_style('fublo_boilerplate_960_responsive');
		
		// Register scripts
		wp_register_script('fublo_boilerplate_mootools', $template_url . '/mootools.js', false, '1.3.2', true);
		
		// Enqueue scripts
		wp_enqueue_script('fublo_boilerplate_mootools');
		
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
	}
}

// Add the initialisation hook
add_action('init', 'fublo_boilerplate_init');