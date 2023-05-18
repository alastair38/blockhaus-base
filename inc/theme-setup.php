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

      remove_filter ('the_excerpt', 'wpautop');

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
          'name'  => 'button-rounded',
          'label' => __( 'Button Rounded', 'blockhaus' ),
        )
      );
    }
  }
  add_action( 'after_setup_theme', 'blockhaus_register_block_styles' );
  
  function blockhaus_custom_images() {
    add_image_size( 'landscape', 800, 450, array( 'center', 'center' ) ); // adds 800 pixels wide by 450 pixels tall image option, hard crop mode
    add_image_size( 'hero', 1600, 1100, array( 'center', 'center' ) ); // adds 1600 pixels wide by 1100 pixels tall image option, hard crop mode
    add_image_size( 'blog', 500, 300, array( 'center', 'center' ) ); // adds 500 pixels wide by 300 pixels tall image option, hard crop mode
    add_image_size( 'social-media', 800, 418, array( 'center', 'center' ) ); // adds 800 pixels wide by 418 pixels tall image option, hard crop mode
  }
  
  add_action( 'after_setup_theme', 'blockhaus_custom_images' );
   
  function blockhaus_image_names( $sizes ) {
      return array_merge( $sizes, array(
          'landscape' => __( 'Landscape' ),
          'hero' => __( 'Hero' ),
          'blog' => __( 'Blog layout' ),
          'social-media' => __( 'Social media' ),
      ) );
  }
  
  add_filter( 'image_size_names_choose', 'blockhaus_image_names' );

  function blockhaus_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'blockhaus_custom_excerpt_length', 999 );

// Ajaxify comments

add_action( 'wp_ajax_ajaxcomments', 'blockhaus_submit_ajax_comment' ); // for registered user
add_action( 'wp_ajax_nopriv_ajaxcomments', 'blockhaus_submit_ajax_comment' ); // for unregistered users

function blockhaus_submit_ajax_comment(){
	/*
	 * @since 4.4.0
	 */
	$comment = wp_handle_comment_submission( wp_unslash( $_POST ) );
	if ( is_wp_error( $comment ) ) {
		$error_data = intval( $comment->get_error_data() );
		if ( ! empty( $error_data ) ) {
			wp_die( '<p>' . $comment->get_error_message() . '</p>', __( 'Comment Submission Failure' ), array( 'response' => $error_data, 'back_link' => true ) );
		} else {
			wp_die( 'Unknown error' );
		}
	}
 
	/*
	 * Set Cookies
	 */
	$user = wp_get_current_user();
	do_action('set_comment_cookies', $comment, $user);
 
	$comment_depth = 1;
	$comment_parent = $comment->comment_parent;
	while( $comment_parent ){
		$comment_depth++;
		$parent_comment = get_comment( $comment_parent );
		$comment_parent = $parent_comment->comment_parent;
	}
 
 	/*
 	 * Set the globals, so our comment functions below will work correctly
 	 */
	$GLOBALS['comment'] = $comment;
	$GLOBALS['comment_depth'] = $comment_depth;
	
	/*
	 * Here is the comment template
	 */
	$comment_html = '<li ' . comment_class('', null, null, false ) . ' id="comment-' . get_comment_ID() . '">
		<article class="comment-body" id="div-comment-' . get_comment_ID() . '">
			<footer class="comment-meta">
				<div class="comment-author vcard">
					' . get_avatar( $comment, 32 ) . '
					<b class="fn">' . get_comment_author_link() . '</b> <span class="says">says:</span>
				</div>
				<div class="comment-metadata">
					<a href="' . esc_url( get_comment_link( $comment->comment_ID ) ) . '">' . sprintf('%1$s at %2$s', get_comment_date(),  get_comment_time() ) . '</a>';
					
					if( $edit_link = get_edit_comment_link() )
						$comment_html .= '<span class="edit-link"><a class="comment-edit-link" href="' . $edit_link . '">Edit</a></span>';
					
				$comment_html .= '</div>';
				if ( $comment->comment_approved == '0' )
					$comment_html .= '<p class="comment-awaiting-moderation">Your comment is awaiting moderation.</p>';

			$comment_html .= '</footer>
			<div class="comment-content">' . apply_filters( 'comment_text', get_comment_text( $comment ), $comment ) . '</div>
		</article>
	</li>';
	echo $comment_html;

	die();
	
}