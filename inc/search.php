<?php
/**
 * Search functionality adaptations, namely adding any register public custom post types to the default search query
 *
 * @package blockhaus
 */


/* Custom Form allows more control over output that using search block */

function blockhaus_custom_form($placeholder = null, $post_type = null) {
	$form = '<form role="search" method="get" class="search-form w-full text-sm leading-6 flex py-1 px-2 bg-primary rounded-full border border-neutral-light-100 focus-within:border-secondary gap-2" action="' . home_url( '/' ) . '">
	<label class="w-full">
	<span class="screen-reader-text">Search for:</span>
	<input type="search" class="search-field w-full border-none ring-transparent focus:ring-transparent focus:shadow-none focus:border-none py-0 px-2 text-sm focus-visible:outline-none" placeholder="Search ' . $placeholder . ' … " value="' . get_search_query() . '" name="s">
	</label>

	<input type="hidden" name="post_type" value="' . $post_type . '">
	<button type="submit" class="search-submit px-2 bg-accent-default text-secondary rounded-full hover:text-primary focus:text-primary hover:bg-secondary focus:bg-secondary transition-colors duration-200 cursor-pointer" aria-label="Submit search" value="Search">
		<svg class="fill-current" aria-hidden="true" focusable="false" id="search-icon" class="search-icon" viewBox="0 0 24 24" width="24" height="24">
					<path d="M13.5 6C10.5 6 8 8.5 8 11.5c0 1.1.3 2.1.9 3l-3.4 3 1 1.1 3.4-2.9c1 .9 2.2 1.4 3.6 1.4 3 0 5.5-2.5 5.5-5.5C19 8.5 16.5 6 13.5 6zm0 9.5c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z"></path>
		</svg>
	</button>
</form>';

return $form;
}