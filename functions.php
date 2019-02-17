<?php

// Remove WP generator meta tag.
remove_action('wp_head', 'wp_generator');
// Remove admin bar.
add_filter('show_admin_bar', function () {
	return false;
});

// Additional styles and scripts
add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('together-days_core-style', get_theme_file_uri('/assets/css/core.css'), [], '1');
	wp_enqueue_script('together-days_core-script', get_theme_file_uri('/assets/js/core.js'), [], '1', true);
});
