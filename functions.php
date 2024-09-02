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

/**
 * Enqueue stylesheet
 */
function littleboxes_enqueue_stylesheet() {

	wp_enqueue_style( 'littleboxes-style', get_template_directory_uri() . '/build/app.min.css', array(), wp_get_theme()->get( 'Version' ) );

}
add_action( 'wp_enqueue_scripts', 'littleboxes_enqueue_stylesheet' );

/**
 * Block pattern category
 */
function littleboxes_register_block_pattern_categories() {

	register_block_pattern_category(
		'littleboxes-pages',
		array(
			'label'       => __( 'Pages', 'littleboxes' ),
			'description' => __( 'Full page patterns included with the littleboxes theme', 'littleboxes' ),
		)
	);
	register_block_pattern_category(
		'littleboxes-headers',
		array(
			'label'       => __( 'Headers', 'littleboxes' ),
			'description' => __( 'Header patterns included with the littleboxes theme', 'littleboxes' ),
		)
	);

	register_block_pattern_category(
		'littleboxes-heroes',
		array(
			'label'       => __( 'Heroes', 'littleboxes' ),
			'description' => __( 'Hero patterns included with the littleboxes theme', 'littleboxes' ),
		)
	);

	register_block_pattern_category(
		'littleboxes-footers',
		array(
			'label'       => __( 'Footers', 'littleboxes' ),
			'description' => __( 'Footer patterns included with the littleboxes theme', 'littleboxes' ),
		)
	);

	register_block_pattern_category(
		'littleboxes-posts',
		array(
			'label'       => __( 'Posts', 'littleboxes' ),
			'description' => __( 'Post patterns included with the littleboxes theme', 'littleboxes' ),
		)
	);

	register_block_pattern_category(
		'littleboxes-portfolios',
		array(
			'label'       => __( 'Portfolios', 'littleboxes' ),
			'description' => __( 'Portfolio patterns included with the littleboxes theme', 'littleboxes' ),
		)
	);

}

add_action( 'init', 'littleboxes_register_block_pattern_categories' );

/**
 * Add block style variations
 */
function littleboxes_register_block_styles() {

	$block_styles = array(
		'core/query-pagination' => array(
			'pagination-button' => __( 'LittleBoxes', 'littleboxes' ),
		),
		'core/categories' => array(
			'category-block' => __( 'LittleBoxes', 'littleboxes' ),
		),
		'core/post-navigation-link' => array(
			'nav-block' => __( 'LittleBoxes', 'littleboxes' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', 'littleboxes_register_block_styles' );

/**
 * Load custom block styles only when the block is used
 */
function littleboxes_enqueue_custom_block_styles() {

	// Scan the css folder to locate block styles.
	$files = glob( get_template_directory() . '/build/*.min.css' );

	foreach ( $files as $file ) {

		// Get the filename and core block name.
		$filename   = basename( $file, '.css' );
		$block_name = str_replace( 'core-', 'core/', $filename );

		wp_enqueue_block_style(
			$block_name,
			array(
				'handle' => "littleboxes-block-{$filename}",
				'src'    => get_theme_file_uri( "bulid/{$filename}.min.css" ),
				'path'   => get_theme_file_path( "bulid/{$filename}.min.css" ),
			)
		);
	}
}
add_action( 'init', 'littleboxes_enqueue_custom_block_styles' );


