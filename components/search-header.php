<?php
/**
 * Template part for displaying default header
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

?>

<header class="entry-header space-y-6">
	<h1 class="text-xl md:text-huge w-11/12 md:w-3/4 mx-auto leading-none font-black font-sans">
<?php echo 'Search results for: <span class="underline decoration-accent-default">' . get_search_query();?> </span>
</h1>
	
	<hr class="w-11/12 md:w-3/4 mx-auto">
	
	<?php 
			
			$referer = $_SERVER['HTTP_REFERER'] ?? null;
			
			if($referer):
				
				echo '<a class="fixed text-sm bottom-4 right-4 rounded-full px-3 py-1 bg-accent-default focus:no-underline hover:no-underline hover:ring-2 hover:ring-offset-2 hover:ring-accent-default focus:ring-2 focus:ring-offset-2 focus:ring-accent-default" href="' . $referer . '">' . esc_html( 'Back to previous page', 'blockhaus' ) . '</a>' ;

			endif;

			?>
		
</header><!-- .entry-header -->