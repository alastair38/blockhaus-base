<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package blockhaus
 */

if ( ! function_exists( 'blockhaus_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function blockhaus_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
		}

		// <time class="updated" datetime="%3$s">%4$s</time>

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'blockhaus' ),
			 $time_string
		);

		echo '<span class="posted-on italic">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'blockhaus_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function blockhaus_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'blockhaus' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'blockhaus_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function blockhaus_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'blockhaus' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'blockhaus' ) . '</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'blockhaus' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'blockhaus' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'blockhaus' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			),
			'<span class="edit-link ml-auto border px-3 py-1 rounded-full has-small-font-size">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'blockhaus_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function blockhaus_post_thumbnail($size) {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail h-full">
				<?php the_post_thumbnail( $size, array( 'class' => 'aspect-video h-full w-full object-cover' ) ); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

				<?php
					the_post_thumbnail(
						$size,
						array(
							'class' => 'w-full object-cover',
							'alt' => the_title_attribute(
								array(
									
									'echo' => false,
								)
							),
						)
					);
				?>

			<?php
		endif; // End is_singular().
	}
endif;

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;

function blockhaus_get_custom_post_types() {

	$args = array(
		'public'   => true,
		// '_builtin' => true
	 );

	$output = 'objects'; // 'names' or 'objects' (default: 'names')
	$operator = 'and'; // 'and' or 'or' (default: 'and')
		
	$post_types = get_post_types( $args, $output, $operator );

	return $post_types;
}

function blockhaus_display_address() {
	$first_line = get_field('first_line', 'options');
	$second_line = get_field('second_line', 'options');
	$town_city = get_field('town_city', 'options');
	$region = get_field('region', 'options');
	$postcode = get_field('postcode', 'options');
	$mobile = get_field('mobile_number', 'options');
	$mobile_numeric = preg_replace( '/\D/', '', $mobile ); // remove spaces etc from the mobile string

	$address = '<address aria-label="Contact address" class="blockhaus-address flex flex-col">';
	$address .= $first_line ? '<span>' . $first_line . '</span>' : ''; 
	$address .= $second_line ? '<span>' . $second_line . '</span>' : ''; 
	$address .= $town_city ? '<span>' . $town_city . '</span>' : ''; 
	$address .= $region ? '<span>' . $region . '</span>' : ''; 
	$address .= $postcode ? '<span>' . $postcode . '</span>' : '';
	$address .= $mobile ? '<a href="tel:+' . $mobile_numeric . '">Tel: ' . $mobile . '</a>' : '';
	$address .= '</address>';

	return $address;
}

function blockhaus_display_social_profiles() {
	$facebook = get_field('facebook_url', 'options');

	if($facebook) {
		$facebook_profile = '<li class="wp-social-link wp-social-link-facebook wp-block-social-link"><a href="' . $facebook . '" class="wp-block-social-link-anchor"><svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M12 2C6.5 2 2 6.5 2 12c0 5 3.7 9.1 8.4 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.3v7C18.3 21.1 22 17 22 12c0-5.5-4.5-10-10-10z"></path></svg><span class="wp-block-social-link-label screen-reader-text">Facebook</span></a></li>';
	}

	$instagram = get_field('instagram_url', 'options');

	if($instagram) {
		$instagram_profile = '<li class="wp-social-link wp-social-link-instagram wp-block-social-link"><a href="' . $instagram . '" class="wp-block-social-link-anchor"><svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M12,4.622c2.403,0,2.688,0.009,3.637,0.052c0.877,0.04,1.354,0.187,1.671,0.31c0.42,0.163,0.72,0.358,1.035,0.673 c0.315,0.315,0.51,0.615,0.673,1.035c0.123,0.317,0.27,0.794,0.31,1.671c0.043,0.949,0.052,1.234,0.052,3.637 s-0.009,2.688-0.052,3.637c-0.04,0.877-0.187,1.354-0.31,1.671c-0.163,0.42-0.358,0.72-0.673,1.035 c-0.315,0.315-0.615,0.51-1.035,0.673c-0.317,0.123-0.794,0.27-1.671,0.31c-0.949,0.043-1.233,0.052-3.637,0.052 s-2.688-0.009-3.637-0.052c-0.877-0.04-1.354-0.187-1.671-0.31c-0.42-0.163-0.72-0.358-1.035-0.673 c-0.315-0.315-0.51-0.615-0.673-1.035c-0.123-0.317-0.27-0.794-0.31-1.671C4.631,14.688,4.622,14.403,4.622,12 s0.009-2.688,0.052-3.637c0.04-0.877,0.187-1.354,0.31-1.671c0.163-0.42,0.358-0.72,0.673-1.035 c0.315-0.315,0.615-0.51,1.035-0.673c0.317-0.123,0.794-0.27,1.671-0.31C9.312,4.631,9.597,4.622,12,4.622 M12,3 C9.556,3,9.249,3.01,8.289,3.054C7.331,3.098,6.677,3.25,6.105,3.472C5.513,3.702,5.011,4.01,4.511,4.511 c-0.5,0.5-0.808,1.002-1.038,1.594C3.25,6.677,3.098,7.331,3.054,8.289C3.01,9.249,3,9.556,3,12c0,2.444,0.01,2.751,0.054,3.711 c0.044,0.958,0.196,1.612,0.418,2.185c0.23,0.592,0.538,1.094,1.038,1.594c0.5,0.5,1.002,0.808,1.594,1.038 c0.572,0.222,1.227,0.375,2.185,0.418C9.249,20.99,9.556,21,12,21s2.751-0.01,3.711-0.054c0.958-0.044,1.612-0.196,2.185-0.418 c0.592-0.23,1.094-0.538,1.594-1.038c0.5-0.5,0.808-1.002,1.038-1.594c0.222-0.572,0.375-1.227,0.418-2.185 C20.99,14.751,21,14.444,21,12s-0.01-2.751-0.054-3.711c-0.044-0.958-0.196-1.612-0.418-2.185c-0.23-0.592-0.538-1.094-1.038-1.594 c-0.5-0.5-1.002-0.808-1.594-1.038c-0.572-0.222-1.227-0.375-2.185-0.418C14.751,3.01,14.444,3,12,3L12,3z M12,7.378 c-2.552,0-4.622,2.069-4.622,4.622S9.448,16.622,12,16.622s4.622-2.069,4.622-4.622S14.552,7.378,12,7.378z M12,15 c-1.657,0-3-1.343-3-3s1.343-3,3-3s3,1.343,3,3S13.657,15,12,15z M16.804,6.116c-0.596,0-1.08,0.484-1.08,1.08 s0.484,1.08,1.08,1.08c0.596,0,1.08-0.484,1.08-1.08S17.401,6.116,16.804,6.116z"></path></svg><span class="wp-block-social-link-label screen-reader-text">Instagram</span></a></li>';
	}

	$linkedin = get_field('linkedin_url', 'options');

	if($linkedin) {
		$linkedin_profile = '<li class="wp-social-link wp-social-link-linkedin wp-block-social-link"><a href="' . $linkedin . '" class="wp-block-social-link-anchor"><svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M19.7,3H4.3C3.582,3,3,3.582,3,4.3v15.4C3,20.418,3.582,21,4.3,21h15.4c0.718,0,1.3-0.582,1.3-1.3V4.3 C21,3.582,20.418,3,19.7,3z M8.339,18.338H5.667v-8.59h2.672V18.338z M7.004,8.574c-0.857,0-1.549-0.694-1.549-1.548 c0-0.855,0.691-1.548,1.549-1.548c0.854,0,1.547,0.694,1.547,1.548C8.551,7.881,7.858,8.574,7.004,8.574z M18.339,18.338h-2.669 v-4.177c0-0.996-0.017-2.278-1.387-2.278c-1.389,0-1.601,1.086-1.601,2.206v4.249h-2.667v-8.59h2.559v1.174h0.037 c0.356-0.675,1.227-1.387,2.526-1.387c2.703,0,3.203,1.779,3.203,4.092V18.338z"></path></svg><span class="wp-block-social-link-label screen-reader-text">LinkedIn</span></a></li>';
	}

	$tiktok = get_field('tiktok_url', 'options');

	if($tiktok) {
		$tiktok_profile = '<li class="wp-social-link wp-social-link-tiktok wp-block-social-link"><a href=" ' . $tiktok . ' " class="wp-block-social-link-anchor"><svg width="24" height="24" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M16.708 0.027c1.745-0.027 3.48-0.011 5.213-0.027 0.105 2.041 0.839 4.12 2.333 5.563 1.491 1.479 3.6 2.156 5.652 2.385v5.369c-1.923-0.063-3.855-0.463-5.6-1.291-0.76-0.344-1.468-0.787-2.161-1.24-0.009 3.896 0.016 7.787-0.025 11.667-0.104 1.864-0.719 3.719-1.803 5.255-1.744 2.557-4.771 4.224-7.88 4.276-1.907 0.109-3.812-0.411-5.437-1.369-2.693-1.588-4.588-4.495-4.864-7.615-0.032-0.667-0.043-1.333-0.016-1.984 0.24-2.537 1.495-4.964 3.443-6.615 2.208-1.923 5.301-2.839 8.197-2.297 0.027 1.975-0.052 3.948-0.052 5.923-1.323-0.428-2.869-0.308-4.025 0.495-0.844 0.547-1.485 1.385-1.819 2.333-0.276 0.676-0.197 1.427-0.181 2.145 0.317 2.188 2.421 4.027 4.667 3.828 1.489-0.016 2.916-0.88 3.692-2.145 0.251-0.443 0.532-0.896 0.547-1.417 0.131-2.385 0.079-4.76 0.095-7.145 0.011-5.375-0.016-10.735 0.025-16.093z"></path></svg><span class="wp-block-social-link-label screen-reader-text">TikTok</span></a></li>';
	}

	$twitter = get_field('twitter_url', 'options');

	if($twitter) {
		$twitter_profile = '<li class="wp-social-link wp-social-link-twitter wp-block-social-link"><a href="' . $twitter . '" class="wp-block-social-link-anchor"><svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M22.23,5.924c-0.736,0.326-1.527,0.547-2.357,0.646c0.847-0.508,1.498-1.312,1.804-2.27 c-0.793,0.47-1.671,0.812-2.606,0.996C18.324,4.498,17.257,4,16.077,4c-2.266,0-4.103,1.837-4.103,4.103 c0,0.322,0.036,0.635,0.106,0.935C8.67,8.867,5.647,7.234,3.623,4.751C3.27,5.357,3.067,6.062,3.067,6.814 c0,1.424,0.724,2.679,1.825,3.415c-0.673-0.021-1.305-0.206-1.859-0.513c0,0.017,0,0.034,0,0.052c0,1.988,1.414,3.647,3.292,4.023 c-0.344,0.094-0.707,0.144-1.081,0.144c-0.264,0-0.521-0.026-0.772-0.074c0.522,1.63,2.038,2.816,3.833,2.85 c-1.404,1.1-3.174,1.756-5.096,1.756c-0.331,0-0.658-0.019-0.979-0.057c1.816,1.164,3.973,1.843,6.29,1.843 c7.547,0,11.675-6.252,11.675-11.675c0-0.178-0.004-0.355-0.012-0.531C20.985,7.47,21.68,6.747,22.23,5.924z"></path></svg><span class="wp-block-social-link-label screen-reader-text">Twitter</span></a></li>';
	}

	$youtube = get_field('youtube_url', 'options');

	if($youtube) {
		$youtube_profile = '<li class="wp-social-link wp-social-link-youtube wp-block-social-link"><a href="' . $youtube . '" class="wp-block-social-link-anchor"><svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M21.8,8.001c0,0-0.195-1.378-0.795-1.985c-0.76-0.797-1.613-0.801-2.004-0.847c-2.799-0.202-6.997-0.202-6.997-0.202 h-0.009c0,0-4.198,0-6.997,0.202C4.608,5.216,3.756,5.22,2.995,6.016C2.395,6.623,2.2,8.001,2.2,8.001S2,9.62,2,11.238v1.517 c0,1.618,0.2,3.237,0.2,3.237s0.195,1.378,0.795,1.985c0.761,0.797,1.76,0.771,2.205,0.855c1.6,0.153,6.8,0.201,6.8,0.201 s4.203-0.006,7.001-0.209c0.391-0.047,1.243-0.051,2.004-0.847c0.6-0.607,0.795-1.985,0.795-1.985s0.2-1.618,0.2-3.237v-1.517 C22,9.62,21.8,8.001,21.8,8.001z M9.935,14.594l-0.001-5.62l5.404,2.82L9.935,14.594z"></path></svg><span class="wp-block-social-link-label screen-reader-text">YouTube</span></a></li>';
	}

	if($facebook || $instagram || $linkedin || $tiktok || $twitter || $youtube):
		$profiles = '<ul class="wp-container-1 wp-block-social-links flex items-end justify-between has-normal-icon-size has-icon-color is-style-logos-only">';
		$profiles .= $facebook_profile . $instagram_profile . $linkedin_profile . $tiktok_profile . $twitter_profile . $youtube_profile;
		$profiles .= '</ul>';
	endif;

	return $profiles;

}

function blockhaus_post_edit_link()  {

		$page_id = get_queried_object_id();
		
		if(current_user_can( 'edit_post', $page_id ) && !is_post_type_archive()):
		echo '<a class="flex gap-2 relative group items-center p-2 bg-neutral-light-100 hover:bg-neutral-light-500 focus:bg-neutral-light-500 rounded-full border border-current" href="' . esc_url( get_edit_post_link($page_id) ) . '">
			<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
			<path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
			</svg>
			<span class="flex rounded-md text-sm sr-only group-hover:px-2 group-hover:py-1 py-1 px-2 group-hover:rounded-sm group-hover:not-sr-only group-hover:absolute right-16 group-hover:w-max bg-neutral-dark-900 text-neutral-light-100">Edit this page</span>
		</a>';
		endif;

}

function blockhaus_admin_link() {
	
	if( is_user_logged_in() ):
	echo '<a class="flex gap-2 relative group items-center p-2 aspect-square bg-neutral-light-100 hover:bg-neutral-light-500 focus:bg-neutral-light-500 rounded-full border border-current" href="' . admin_url() . '">
	<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
		<path stroke-linecap="round" stroke-linejoin="round" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
	</svg>
	<span class="flex rounded-md text-sm sr-only group-hover:px-2 group-hover:py-1 py-1 px-2 group-hover:rounded-sm group-hover:not-sr-only group-hover:absolute right-16 group-hover:w-max bg-neutral-dark-900 text-neutral-light-100">Admin</span>
	</a>';
	endif;

}

function blockhaus_logout_link() {

	if( is_user_logged_in() ):
	echo '<a class="flex gap-2 relative group items-center p-2 bg-neutral-light-100 hover:bg-neutral-light-500 focus:bg-neutral-light-500 rounded-full border border-current" href="' . esc_url( wp_logout_url() ) . '">
	<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
	<path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
	</svg>
	<span class="flex rounded-md text-sm sr-only group-hover:px-2 group-hover:py-1 py-1 px-2 group-hover:rounded-sm group-hover:not-sr-only group-hover:absolute right-16 group-hover:w-max bg-neutral-dark-900 text-neutral-light-100">Logout</span>
	</a>';
	endif;

}

function blockhaus_header_layout() {

	$header = new stdClass;
	$post_type = get_post_type();

	if(is_archive() && ! is_search()):

		if(function_exists('get_field')):
		$headerSettings = get_field(get_post_type() . '_page_settings', 'options');
		$header->image = $headerSettings['header_image'];
		$header->contain =  $headerSettings['contain_image'];
		$header->position =  $headerSettings['position_image'];
		$header->mono =  $headerSettings['mono_image'];
		endif;

		$header->title = get_the_archive_title();

	elseif ( is_home() && ! is_front_page() ):

		if(function_exists('get_field')):
			$headerSettings = get_field(get_post_type() . '_page_settings', 'options');
			$header->image = $headerSettings['header_image'];
			$header->contain =  $headerSettings['contain_image'];
			$header->position =  $headerSettings['position_image'];
			$header->mono =  $headerSettings['mono_image'];
		endif;

		$header->title = single_post_title('',false);

	elseif (is_search()):

		if(function_exists('get_field')):
		// $header->image = get_field('search_header', 'options');
		// $header->background =  get_field('search_choose_background', 'options');
		endif;

		$header->title = 	'<span class="underline decoration-accent-secondary decoration-4">Search results for: ' . get_search_query() . '</span>';

	else:

		if(function_exists('get_field')):
		$header->showImage = get_field('background_image_layout');
		$header->background =  get_field('choose_background');
		$header->contain =  get_field('contain_image');
		$header->mono =  get_field('mono_image');
		$header->position =  get_field('position_image');
		endif;

		$header->title = get_the_title();

	endif;


	return $header;
}
