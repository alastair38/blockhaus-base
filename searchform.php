<form role="search" method="get" class="search-form flex gap-2" action="<?php echo home_url( '/' ); ?>">
	<label>
		<span class="screen-reader-text">Search for:</span>
		<input type="search" class="search-field shadow-retro px-4 py-1 border border-current focus-visible:outline-none focus-visible:ring-green-400 focus-visible:ring-4" placeholder="Search …" value="<?php echo get_search_query() ?>" name="s">
	</label>
	<input type="submit" class="search-submit py-1 px-4 border border-current inline-flex hover:bg-gray-200 transition-colors duration-200 shadow-retro bg-gray-100 cursor-pointer font-bold" value="Search">
</form>