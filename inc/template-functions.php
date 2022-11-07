<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package blockhaus
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function blockhaus_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	
	$classes[] = 'flex flex-col h-full w-full bg-neutral-light-100 bg-cover bg-fixed';

	return $classes;
}
add_filter( 'body_class', 'blockhaus_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function blockhaus_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'blockhaus_pingback_header' );
