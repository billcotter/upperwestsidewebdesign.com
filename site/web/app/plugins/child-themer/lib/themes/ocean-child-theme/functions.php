<?php

add_action( 'wp_enqueue_scripts', 'ocean_child_enqueue_parent_style' );
/**
 * Load the parent style.css file
 */
function ocean_child_enqueue_parent_style() {
	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
	$theme   = wp_get_theme( 'Ocean' );
	$version = $theme->get( 'Version' );
	// Load the stylesheet
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array(), $version );
	
}

/* Add your custom functions below... */
