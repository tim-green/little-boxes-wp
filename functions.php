<?php

/**
 *  GroundCTRL Framework 
 *  https://developer.wordpress.org/themes/basics/theme-functions/
 */


/**
 * Set up LittleBoxes theme
 */

if ( ! function_exists( 'littleboxes_setup' ) ) {
	function littleboxes_setup() {

		// Add translation
		load_theme_textdomain( 'littleboxes', get_template_directory() . '/languages' );

		// Enqueue editor stylesheet
		add_editor_style( get_template_directory_uri() . '/build/app.min.css' );

		// Remove core block patterns, we don't need that
		remove_theme_support( 'core-block-patterns' );

	}
}
add_action( 'after_setup_theme', 'littleboxes_setup' );
