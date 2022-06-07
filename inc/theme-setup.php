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

  function blockhaus_get_custom_post_types() {

    $args = array(
      'public'   => true,
      '_builtin' => false
     );
  
  
    $output = 'objects'; // 'names' or 'objects' (default: 'names')
    $operator = 'and'; // 'and' or 'or' (default: 'and')
      
    $post_types = get_post_types( $args, $output, $operator );

    return $post_types;
  }

  function my_custom_dashboard_widgets() {

    global $wp_meta_boxes;
    remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal'); //Removes the 'incoming links' widget
    remove_meta_box('dashboard_plugins', 'dashboard', 'normal'); //Removes the 'plugins' widget
    remove_meta_box('dashboard_primary', 'dashboard', 'normal'); //Removes the 'WordPress News' widget
    remove_meta_box('dashboard_secondary', 'dashboard', 'normal'); //Removes the secondary widget
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side'); //Removes the 'Quick Draft' widget
    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side'); //Removes the 'Recent Drafts' widget
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal'); //Removes the 'Activity' widget
    remove_meta_box('dashboard_right_now', 'dashboard', 'normal'); //Removes the 'At a Glance' widget
    remove_meta_box('dashboard_activity', 'dashboard', 'normal'); //Removes the 'Activity' widget (since 3.8)
    remove_meta_box('dashboard_primary', 'dashboard', 'side' ); 
    remove_meta_box('dashboard_secondary', 'dashboard', 'side' );
    remove_meta_box('dashboard_site_health', 'dashboard', 'normal');

  }

  add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

  add_filter( 'wpforms_admin_dashboardwidget', '__return_false' );

  /**
 * Add a widget to the dashboard.
 *
 * This function is hooked into the 'wp_dashboard_setup' action below.
 */
function blockhaus_add_dashboard_widgets() {
  $site_title = get_bloginfo( 'name' );
  wp_add_dashboard_widget(
      'blockhaus_dashboard_widget',                          // Widget slug.
      esc_html__( $site_title . ' quick glance', 'blockhaus' ), // Title.
      'blockhaus_dashboard_widget_render'                    // Display function.
  ); 
}
add_action( 'wp_dashboard_setup', 'blockhaus_add_dashboard_widgets' );

/**
* Create the function to output the content of our Dashboard Widget.
*/
function blockhaus_dashboard_widget_render() {
  // Display whatever you want to show.
  $count_posts = wp_count_posts();
  $count_pages = wp_count_posts('page');
  $users = count_users();
  if($users['total_users'] === 1):
    $user_label = 'user';
  else:
    $user_label = 'users';
  endif;

  $current_user = wp_get_current_user();
 
?>
  <div class="post-count col-span-full">
  <p><?php echo 'Hi, <span class="name">' . $current_user->display_name . '</span>. Welcome to ' . get_bloginfo( 'name' ) . '.' ?></p>

  <p><?php esc_html_e('This dashboard gives you quick access to information about your site and your main content areas.' , "blockhaus" );?></p>
   
    <a href="/wp-admin/profile.php"> <?php esc_html_e('Update your profile' , "blockhaus" );?></a>
  </div>
  <div class="post-count">
    <span class="number">
    <?php esc_html_e( $users['total_users'] , "blockhaus" );?>
    </span>
    
    <span class="post-type">
    <?php esc_html_e( $user_label, "blockhaus" );?>
    </span>
    <a href="/wp-admin/users.php"> <?php esc_html_e('View users' , "blockhaus" );?></a>
  </div>

  <div class="post-count">
    <span class="number">
    <?php esc_html_e( $count_pages->publish , "blockhaus" );?>
    </span>
    
    <span class="post-type">
    <?php esc_html_e( "pages", "blockhaus" );?>
    </span>
    <a href="/wp-admin/edit.php?post_type=page"> <?php esc_html_e('View pages' , "blockhaus" );?></a>
  </div>

  <div class="post-count">
    <span class="number">
    <?php esc_html_e( $count_posts->publish , "blockhaus" );?>
    </span>
    
    <span class="post-type">
    <?php esc_html_e( "posts", "blockhaus" );?>
    </span>
    <a href="/wp-admin/edit.php?post_type=post"> <?php esc_html_e('View posts' , "blockhaus" );?></a>
  </div>

  <?php

$cpts = blockhaus_get_custom_post_types();

if($cpts):
  foreach($cpts as $cpt) {
    $count = wp_count_posts($cpt->name);
    if($count === 1):
      $type = $cpt->name;
    else: 
      $type = $cpt->label;
    endif;
    ?>
    <div class="post-count">
    <span class="number">
    <?php esc_html_e( $count->publish , "blockhaus" );?>
    </span>
    <span class="post-type">
    <?php esc_html_e( $type, "blockhaus" );?>
    </span>
    <a href="/wp-admin/edit.php?post_type=<?php echo $cpt->name;?>"> <?php esc_html_e('View ' . $cpt->label , "blockhaus" );?></a>
  </div>
   
  <?php }
endif;
?>

  <div class="post-count">
    <a href="/wp-admin/admin.php?page=theme-options">Update settings</a>
   
  </div>
<?php }


  