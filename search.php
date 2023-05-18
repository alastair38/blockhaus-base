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

	<main id="primary" class="main-content w-11/12 space-y-12 mx-auto mt-12">

	<?php get_template_part('components/search-header'); ?>

		<div class="w-11/12 md:w-3/4 mx-auto space-y-12">
			
		<?php if ( have_posts() ) : 
		
		?>

	

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'layouts/search' );
				

			endwhile;

			the_posts_navigation(array('class' => 'col-span-full'));

		else :

			get_template_part( 'layouts/none' );

		endif;
		?>

	</div>
	
	</main><!-- #main -->

<?php
get_footer();
