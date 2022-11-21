<?php
/**
 * * Template Name: Home Page Template
 *
 * @package blockhaus
 */

get_header();
?>

	<main id="primary" class="main-content lg:pb-20">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'layouts/home' );

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

get_footer();
