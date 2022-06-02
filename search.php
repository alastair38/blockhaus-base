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

	<main id="primary" class="main-content pt-20 lg:py-8">

		<?php if ( have_posts() ) : ?>
			<article class="p-6 w-11/12 md:w-3/4 bg-white rounded-md mx-auto space-y-6">	
			<header class="page-header">
				<h1 class="has-gigantic-font-size font-black">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'blockhaus' ), '<span class="underline decoration-emerald-300 decoration-4">' . get_search_query() . '</span>' );
					?>
				</h1>
				<?php get_search_form( );?>
			</header><!-- .page-header -->

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
		</article>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
