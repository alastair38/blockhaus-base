<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

get_header();


?>

	<main class="main-content w-11/12 mx-auto mt-12">

		

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :?>

				<div class="grid grid-cols-1 md:grid-cols-3 gap-12">
				<?php get_template_part('components/archive-header'); ?>
				
				
				

				<?php
				
			endif;

		

			/* Start the Loop */
			while ( have_posts() ) :

				the_post();

				get_template_part( 'layouts/content');

			endwhile;

			the_posts_navigation(['aria_label' => __( 'More content' ), 'class' => 'col-span-full']);

		else :

			get_template_part( 'layouts/none' );

		endif;
		?>
		</div>
	</main><!-- #main -->

<?php

get_footer();
