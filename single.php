<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package blockhaus
 */

get_header();
?>

	<main id="primary" class="site-main lg:pb-20">

		<?php
		while ( have_posts() ) :
			the_post();

			// get_template_part( 'layouts/content', 'page' );
			get_template_part( 'layouts/full-width');

			the_post_navigation(
				array(
					'prev_text' => '<span aria-hidden="true" class="nav-subtitle font-bold"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					<path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
				</svg></span> <span class="nav-title sr-only md:not-sr-only pl-2">%title</span>',
					'next_text' => '<span class="nav-title sr-only md:not-sr-only pl-2">%title</span><span aria-hidden="true" class="nav-subtitle font-bold"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
				</svg></span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

get_footer();
