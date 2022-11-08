<?php
/**
 * Enqueue site CSS and JS scripts
 *
 *
 * @package blockhaus
 */

function blockhaus_scripts() {
	wp_enqueue_style( 'blockhaus-style', get_template_directory_uri() . '/styles/style.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_style_add_data( 'blockhaus-style', 'rtl', 'replace' );

	wp_enqueue_script( 'blockhaus-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), wp_get_theme()->get( 'Version' ), true );

	$cookies_set = get_field('cookies_set', 'option');

  if($cookies_set) {
      wp_enqueue_script( 'cookie-js', 'https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js', array(), '', true );
      wp_enqueue_script( 'cookie-init-js', get_template_directory_uri() . '/assets/js/cookieinit.js', array( 'jquery' ), '', true );

      // wp_enqueue_style( 'cookie-style', 'https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css', array(), '', 'all' );
    }

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

	function custom_admin_css() {
  
		wp_enqueue_style( 'admin_styles', get_template_directory_uri() . '/styles/admin.css',true,'1.1','all', wp_get_theme()->get( 'Version' ));
	}
add_action('admin_footer', 'custom_admin_css');
