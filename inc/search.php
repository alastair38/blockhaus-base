<?php
/**
 * Search functionality adaptations, namely adding any register public custom post types to the default search query
 *
 * @package blockhaus
 */

function include_cpt_search( $query ) {

  // $args to get all public custom post types (excludes default WP post types)

	$args = array(
		'public'   => true,
		'_builtin' => false
 	);

  // set $types_to_search array to "page" and "post", which we want to be included in search as usual 
	
	$types_to_search = array("page", "post");
	$output = 'names'; // 'names' or 'objects' (default: 'names')
	$operator = 'and'; // 'and' or 'or' (default: 'and')
		
	$post_types = get_post_types( $args, $output, $operator );
	
  // loop through all registered public custom post types and add them to the $types_to_search array

	if ( $post_types ) { // If there are any custom public post types.
			foreach ( $post_types  as $post_type ) {
					array_push($types_to_search , $post_type);
			}
	}

  // check if the query is_search and not in the admin, then set the query to include any public CPTs alongside pages and posts 

	if ( $query->is_search && !is_admin() ) { // added !is_admin() so admin filters don't break
	$query->set( 'post_type', $types_to_search );
	}

	return $query;

}
add_filter( 'pre_get_posts', 'include_cpt_search' );

/* Custom Form allows more control over output that using search block */

function blockhaus_custom_form($placeholder) {
	$form = '<form role="search" method="get" class="search-form w-full lg:w-1/2 text-sm leading-6 flex py-1 px-2 bg-primary-default rounded-full border border-neutral-light-100 focus-within:border-secondary gap-2" action="' . home_url( '/' ) . '">
	<label class="w-full">
		<span class="screen-reader-text">Search for:</span>
		<input type="search" class="search-field w-full border-none ring-transparent focus:ring-transparent focus:shadow-none focus:border-none py-0 px-2 text-sm focus-visible:outline-none" placeholder="' . $placeholder . '" value="' . get_search_query() . '" name="s">
	</label>
	<button type="submit" class="search-submit px-2 bg-accent-default text-primary-default rounded-full hover:bg-neutral-dark-500 transition-colors duration-200 cursor-pointer" aria-label="Submit search" value="Search">
    <svg class="fill-primary-default" aria-hidden="true" focusable="false" id="search-icon" class="search-icon" viewBox="0 0 24 24" width="24" height="24">
					<path d="M13.5 6C10.5 6 8 8.5 8 11.5c0 1.1.3 2.1.9 3l-3.4 3 1 1.1 3.4-2.9c1 .9 2.2 1.4 3.6 1.4 3 0 5.5-2.5 5.5-5.5C19 8.5 16.5 6 13.5 6zm0 9.5c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z"></path>
		</svg>
</button>
</form>';

return $form;
}