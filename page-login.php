<?php
/**
 * * Template Name: Login Page
 *
 * @package blockhaus
 */


get_header();
?>

	<main id="primary" class="main-content py-20 lg:pt-8 lg:pb-20">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'login' );

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

get_footer();
