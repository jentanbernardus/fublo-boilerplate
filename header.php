<!DOCTYPE html>
<html lang='en'>
	<head>
		<title><?php
			wp_title('|', true, 'right');
			bloginfo('name');
			
			$site_description = get_bloginfo('description', 'display');
			
			if ($site_description && (is_home() || is_front_page()))
			{
				echo ' | ' . $site_description;
			}
		?></title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
		<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/html5.js'></script>
		<?php wp_head(); ?>
	</head>
	
	<body>