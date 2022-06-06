<?php
/**
 * blockhaus functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blockhaus
 */

if ( ! defined( 'BLOCKHAUS_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'BLOCKHAUS_VERSION', '1.0.0' );
}

/**
 * Initial theme setup
 */

require get_template_directory() . '/inc/theme-setup.php';


/**
 * Enqueue scripts and styles.
 */

require get_template_directory() . '/inc/scripts.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add public custom post types to main search query
 */

require get_template_directory() . '/inc/search.php';

/**
 * Add customized main navigation
 */

require get_template_directory() . '/inc/navigation.php';

/**
 * Block patterns
 */
require get_template_directory() . '/inc/block-patterns.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

