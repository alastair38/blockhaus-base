<?php

/**
 * Removes default admin dashboard widgets and builds a new dashboard admin panel. Also removes help tabs.
 *
 */ 

  function blockhaus_custom_dashboard_widgets() {

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

  add_action('wp_dashboard_setup', 'blockhaus_custom_dashboard_widgets');

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

function blockhaus_contextual_help_list_remove(){
    global $current_screen;
    $current_screen->remove_help_tabs();
}

add_filter('contextual_help_list','blockhaus_contextual_help_list_remove');


function blockhaus_remove_welcome_panel() {
    global $wp_filter;
    unset( $wp_filter['welcome_panel'] );
}

add_action( 'wp_dashboard_setup', 'blockhaus_remove_welcome_panel' );

add_filter( 'admin_footer_text', '__return_empty_string', 11 );
add_filter( 'update_footer',     '__return_empty_string', 11 );
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
  <div class="dashboard-card settings col-span-full">
  <p><?php echo 'Hi, <span class="name">' . $current_user->display_name . '</span>. Welcome to ' . get_bloginfo( 'name' ) . '.' ?></p>

  <p><?php esc_html_e('This dashboard gives you quick access to information about your site and the main content areas.' , "blockhaus" );?></p>
   
    <a href="/wp-admin/profile.php">
      <svg aria-hidden="true"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      <?php esc_html_e('Update your profile' , "blockhaus" );?>
    </a>
  </div>
  <div class="dashboard-card">
    <span class="number">
    <?php esc_html_e( $users['total_users'] , "blockhaus" );?>
    </span>
    
    <span class="post-type">
    <?php esc_html_e( $user_label, "blockhaus" );?>
    </span>
    <div class="actions">
      <a aria-label="View all users" href="/wp-admin/users.php">
        <svg aria-hidden="none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
        </svg>
        <?php esc_html_e('users' , "blockhaus" );?>
      </a>
      <a aria-label="Add new user" href="/wp-admin/user-new.php">
        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
        </svg>
        <?php esc_html_e('User' , "blockhaus" );?>
      </a>
    </div>
  </div>

  <?php

$cpts = blockhaus_get_custom_post_types();

if($cpts):
  foreach($cpts as $cpt) {
    if($cpt->name !== 'attachment'):
    
      $total_count = wp_count_posts($cpt->name);
      $count = $total_count->publish;
    
    
    if($count == 1):
      $type = $cpt->name;
    else: 
      $type = $cpt->label;
    endif;
    ?>
    <div class="dashboard-card">
    <span class="number">
    <?php esc_html_e( $count , "blockhaus" );?>
    </span>
    <span class="post-type">
    <?php esc_html_e( $type, "blockhaus" );?>
    </span>
    <div class="actions">
      <a aria-label="View all <?php esc_html_e( $cpt->label , "blockhaus" );?>" href="/wp-admin/edit.php?post_type=<?php echo $cpt->name;?>">
        <svg aria-hidden="none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
        </svg>
      <?php esc_html_e($cpt->label , "blockhaus" );?>
      </a>
      <a aria-label="Add new <?php esc_html_e( $cpt->name , "blockhaus" );?>" href="/wp-admin/post-new.php?post_type=<?php echo $cpt->name;?>">
        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
        </svg>
      <?php esc_html_e($cpt->name , "blockhaus" );?>
    </a>
    </div>
  </div>

   
  <?php
  endif;
 }
endif;
?>

  <div class="dashboard-card settings">
    <a href="/wp-admin/admin.php?page=theme-options">
      <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
      </svg>
      <?php esc_html_e( 'Update options' , "blockhaus" );?>
    </a>
   
  </div>
<?php }

function blockhaus_admin_bar_remove_logo() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu( 'wp-logo' );
}
add_action( 'wp_before_admin_bar_render', 'blockhaus_admin_bar_remove_logo', 0 );

  