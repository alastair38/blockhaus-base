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
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
if ( ! function_exists( 'blockhaus_setup' ) ) {
function blockhaus_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on blockhaus, use a find and replace
		* to change 'blockhaus' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'blockhaus', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'blockhaus' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

		add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-styles' );
		add_editor_style( 'styles/style.css' );

		remove_theme_support( 'core-block-patterns' );

}
}
add_action( 'after_setup_theme', 'blockhaus_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function blockhaus_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'blockhaus_content_width', 640 );
}
add_action( 'after_setup_theme', 'blockhaus_content_width', 0 );

/**
 * Block Styles
 */
function blockhaus_register_block_styles() {

	if ( function_exists( 'register_block_style' ) ) {

		register_block_style(
			'core/button',
			array(
				'name'  => 'button-retro',
				'label' => __( 'Button Retro', 'blockhaus' ),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'button-rounded',
				'label' => __( 'Button Rounded', 'blockhaus' ),
			)
		);
	}
}
add_action( 'after_setup_theme', 'blockhaus_register_block_styles' );

function blockhaus_custom_images() {
	add_image_size( 'landscape', 800, 450, array( 'center', 'center' ) ); // adds 800 pixels wide by 450 pixels tall image option, hard crop mode
	add_image_size( 'profile', 300, 300, array( 'center', 'center' ) ); // adds 300 pixels wide by 300 pixels tall image option, hard crop mode
}

add_action( 'after_setup_theme', 'blockhaus_custom_images' );


 
function blockhaus_image_names( $sizes ) {
    return array_merge( $sizes, array(
        'landscape' => __( 'Landscape' ),
				'profile' => __( 'Profile' ),
    ) );
}

add_filter( 'image_size_names_choose', 'blockhaus_image_names' );

/* Custom Form */

function blockhaus_custom_form($placeholder) {
	$form = '<form role="search" method="get" class="search-form text-sm leading-6 flex py-1 px-2 bg-white rounded-full border border-current focus-within:border-emerald-300 gap-2" action="' . home_url( '/' ) . '">
	<label>
		<span class="screen-reader-text">Search for:</span>
		<input type="search" class="search-field w-32 focus-visible:outline-none" placeholder="' . $placeholder . '" value="' . get_search_query() . '" name="s">
	</label>
	<button type="submit" class="search-submit px-2 bg-emerald-300 rounded-full hover:bg-gray-200 transition-colors duration-200 cursor-pointer" aria-label="Submit search" value="Search">
    <svg aria-hidden="true" focusable="false" id="search-icon" class="search-icon" viewBox="0 0 24 24" width="24" height="24">
					<path d="M13.5 6C10.5 6 8 8.5 8 11.5c0 1.1.3 2.1.9 3l-3.4 3 1 1.1 3.4-2.9c1 .9 2.2 1.4 3.6 1.4 3 0 5.5-2.5 5.5-5.5C19 8.5 16.5 6 13.5 6zm0 9.5c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z"></path>
		</svg>
</button>
</form>';

return $form;
}

/* Add search bar to main navigation */

function add_searchbar_box( $items, $args )
{
    if($args->theme_location == 'menu-1')
    {
      
      $items .= '<li>' . blockhaus_custom_form('Search ...') . '</li>';
       
    }

    return $items;
}

add_filter( 'wp_nav_menu_items', 'add_searchbar_box', 10, 2);


/**
 * Add an Instagram link to the main navigation
 */
function add_socialmedia_link( $items, $args )
{
    if($args->theme_location == 'menu-1')
    {
      
      $items .= '<li>		<a id="instagram-link" class="flex gap-1 h-10 rounded-md lg:rounded-none bg-emerald-300 hover:bg-emerald-200 px-6 py-2 items-center" href="/"><span>Instagram</span><svg class="w-6 h-6" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M12,4.622c2.403,0,2.688,0.009,3.637,0.052c0.877,0.04,1.354,0.187,1.671,0.31c0.42,0.163,0.72,0.358,1.035,0.673 c0.315,0.315,0.51,0.615,0.673,1.035c0.123,0.317,0.27,0.794,0.31,1.671c0.043,0.949,0.052,1.234,0.052,3.637 s-0.009,2.688-0.052,3.637c-0.04,0.877-0.187,1.354-0.31,1.671c-0.163,0.42-0.358,0.72-0.673,1.035 c-0.315,0.315-0.615,0.51-1.035,0.673c-0.317,0.123-0.794,0.27-1.671,0.31c-0.949,0.043-1.233,0.052-3.637,0.052 s-2.688-0.009-3.637-0.052c-0.877-0.04-1.354-0.187-1.671-0.31c-0.42-0.163-0.72-0.358-1.035-0.673 c-0.315-0.315-0.51-0.615-0.673-1.035c-0.123-0.317-0.27-0.794-0.31-1.671C4.631,14.688,4.622,14.403,4.622,12 s0.009-2.688,0.052-3.637c0.04-0.877,0.187-1.354,0.31-1.671c0.163-0.42,0.358-0.72,0.673-1.035 c0.315-0.315,0.615-0.51,1.035-0.673c0.317-0.123,0.794-0.27,1.671-0.31C9.312,4.631,9.597,4.622,12,4.622 M12,3 C9.556,3,9.249,3.01,8.289,3.054C7.331,3.098,6.677,3.25,6.105,3.472C5.513,3.702,5.011,4.01,4.511,4.511 c-0.5,0.5-0.808,1.002-1.038,1.594C3.25,6.677,3.098,7.331,3.054,8.289C3.01,9.249,3,9.556,3,12c0,2.444,0.01,2.751,0.054,3.711 c0.044,0.958,0.196,1.612,0.418,2.185c0.23,0.592,0.538,1.094,1.038,1.594c0.5,0.5,1.002,0.808,1.594,1.038 c0.572,0.222,1.227,0.375,2.185,0.418C9.249,20.99,9.556,21,12,21s2.751-0.01,3.711-0.054c0.958-0.044,1.612-0.196,2.185-0.418 c0.592-0.23,1.094-0.538,1.594-1.038c0.5-0.5,0.808-1.002,1.038-1.594c0.222-0.572,0.375-1.227,0.418-2.185 C20.99,14.751,21,14.444,21,12s-0.01-2.751-0.054-3.711c-0.044-0.958-0.196-1.612-0.418-2.185c-0.23-0.592-0.538-1.094-1.038-1.594 c-0.5-0.5-1.002-0.808-1.594-1.038c-0.572-0.222-1.227-0.375-2.185-0.418C14.751,3.01,14.444,3,12,3L12,3z M12,7.378 c-2.552,0-4.622,2.069-4.622,4.622S9.448,16.622,12,16.622s4.622-2.069,4.622-4.622S14.552,7.378,12,7.378z M12,15 c-1.657,0-3-1.343-3-3s1.343-3,3-3s3,1.343,3,3S13.657,15,12,15z M16.804,6.116c-0.596,0-1.08,0.484-1.08,1.08 s0.484,1.08,1.08,1.08c0.596,0,1.08-0.484,1.08-1.08S17.401,6.116,16.804,6.116z"></path></svg></a></li>';
       
    }

    return $items;
}

add_filter( 'wp_nav_menu_items', 'add_socialmedia_link', 10, 2);


/* Add custom post types to search query  */

function include_cpt_search( $query ) {

	if ( $query->is_search && !is_admin() ) { // added !is_admin() so admin filters don't break
	$query->set( 'post_type', array( 'post', 'page', 'story', 'project') );
	}

	return $query;

}
add_filter( 'pre_get_posts', 'include_cpt_search' );

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
 * Block patterns
 */
require get_template_directory() . '/inc/block-patterns.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

