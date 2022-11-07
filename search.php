<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package blockhaus
 */

get_header();
?>

	<main id="primary" class="main-content space-y-6 md:space-y-12 mb-12">

		<?php if ( have_posts() ) : 
		
		$header_image = get_field('search_header', 'options');
		$transparent =  get_field('search_page_transparent_header', 'options');
		$background =  get_field('search_choose_background', 'options');
		if(!$background):
			$background = 'no';
		endif;
				
		?>

			<header class="entry-header grid grid-cols-header-mobile md:grid-cols-header relative h-80 has-<?php echo $background;?>-background-color has-background bg-curves bg-fixed bg-cover overflow-hidden">

	<h1 class="leading-none py-3 z-0 mb-6 w-fit col-start-2 row-start-1 place-self-end justify-self-start bg-primary-default text-lg md:text-gigantic px-6 font-black uppercase">
	<?php
	/* translators: %s: search query. */
	printf( esc_html__( 'Search Results for: %s', 'blockhaus' ), '<span class="underline decoration-accent-secondary decoration-4">' . get_search_query() . '</span>' );
	?>
</h1>

<?php 
				if($header_image):
				if($transparent): ?>
				<img class="h-80 md:place-self-end col-span-full md:col-start-2 md:col-span-1 row-start-1 object-contain object-right" src="<?php echo $header_image['url'];?>" alt="<?php echo $header_image['alt'];?>">

				<?php endif;
				endif; ?>
	</header><!-- .page-header -->

	<div class="p-6 md:p-12 w-11/12 md:w-3/4 bg-primary-default rounded-md mx-auto space-y-6">

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</div>
	
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
