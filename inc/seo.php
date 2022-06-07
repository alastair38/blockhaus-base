<?php
/**
 * Adds SEO descriptions for archive pages and singular post types pages. This function depends on descriptions being set for taxonomies and the Blockhaus Functionality plugin being activated to provide options for CPT archive descriptions
 *
 * @package blockhaus
 */


function blockhaus_meta_description() {

  global $post;
  if ( is_singular() && !is_front_page() ) {
      $post_description = strip_tags($post->post_content);
      // $post_description = strip_shortcodes( $post->post_content );
      $post_description = str_replace( array("\n", "\r", "\t"), ' ', $post_description );
      $post_description = mb_substr( $post_description, 0, 310, 'utf8' );
      $post_description = normalize_whitespace($post_description);
      echo '<meta name="description" content="' . $post_description . '" />' . "\n";
  }
  
  if ( is_home() ) {
  		$blog_page_description = get_field("blog_page_description", "options");
      if($blog_page_description):
  		$blog_page_description = strip_tags($blog_page_description);
  		$blog_page_description = normalize_whitespace($blog_page_description);
      echo '<meta name="description" content="' . $blog_page_description . '" />' . "\n";
      endif;
  }
  
  if ( is_front_page() ) {
      echo '<meta name="description" content="' . get_bloginfo( "description" ) . '" />' . "\n";
  }
  if ( is_category() ) {
      $category_description = strip_tags(category_description());
      if($category_description):
      $category_description = normalize_whitespace($category_description);
      echo '<meta name="description" content="' . $category_description . '" />' . "\n";
      endif;
  }

  if ( is_tax() ) {
      $term_description = strip_tags(term_description());
      if($term_description):
      $term_description = normalize_whitespace($term_description);
      echo '<meta name="description" content="' . $term_description . '" />' . "\n";
      endif;
  }

    // get registered public custom post types
    $args = array(
      'public'   => true,
      '_builtin' => false
     );
  
  
    $output = 'names'; // 'names' or 'objects' (default: 'names')
    $operator = 'and'; // 'and' or 'or' (default: 'and')
      
    $post_types = get_post_types( $args, $output, $operator );
    
    // loop through all registered public custom post types and add them to the $types_to_search array
  
    if ( $post_types ) { // If there are any custom public post types.
        foreach ( $post_types  as $post_type ) { // loop through
          if ( is_post_type_archive($post_type) ) { // check if on the archive page for that post type
            $description = get_field($post_type . "_page_description", "options"); // get post type page description from options page
            if($description): // if description exists, add it to the head
            $description = strip_tags($description);
            $description = normalize_whitespace($description);
            echo '<meta name="description" content="' . $description . '" />' . "\n";
            endif;
        }
      }
    }
}
add_action( 'wp_head', 'blockhaus_meta_description');