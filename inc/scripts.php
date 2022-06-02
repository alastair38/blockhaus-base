<?php
/**
 * Enqueue site CSS and JS scripts
 *
 *
 * @package blockhaus
 */

function blockhaus_scripts() {
	wp_enqueue_style( 'blockhaus-style', get_template_directory_uri() . '/styles/style.css', array(), BLOCKHAUS_VERSION );
	wp_style_add_data( 'blockhaus-style', 'rtl', 'replace' );

	wp_enqueue_script( 'blockhaus-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), BLOCKHAUS_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'blockhaus_scripts' );

// Block variations js

function block_variations() {
	wp_enqueue_script(
	'prefix-block-variations',
	get_template_directory_uri() . '/assets/js/block-variations.js',
	array( 'wp-blocks')
	);
	}
	add_action( 'enqueue_block_editor_assets', 'block_variations' );
