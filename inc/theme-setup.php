<?php

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
        'footer-1' => esc_html__( 'Footer', 'blockhaus' ),
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

       // Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function blockhaus_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'blockhaus_mime_types' );

function blockhaus_fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'blockhaus_fix_svg' );
  
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
    add_image_size( 'blog', 500, 300, array( 'center', 'center' ) ); // adds 300 pixels wide by 300 pixels tall image option, hard crop mode
  }
  
  add_action( 'after_setup_theme', 'blockhaus_custom_images' );
   
  function blockhaus_image_names( $sizes ) {
      return array_merge( $sizes, array(
          'landscape' => __( 'Landscape' ),
          'profile' => __( 'Profile' ),
          'blog' => __( 'Blog layout' ),
      ) );
  }
  
  add_filter( 'image_size_names_choose', 'blockhaus_image_names' );