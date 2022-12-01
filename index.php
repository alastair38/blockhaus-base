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

$postTypeMeta = get_field(get_post_type() . '_page_settings', "options");

?>

	<main class="main-content lg:pb-20">

		<?php get_template_part('components/full-width-header-alt'); ?>

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :?>

				<div class="grid my-6 lg:my-12 rounded-md w-11/12 md:w-3/4 mx-auto grid-cols-1 md:grid-cols-3 gap-6">


				<?php
				
			endif;

			if($postTypeMeta['page_description']):?>

				<div class="col-span-full"><?php echo $postTypeMeta['page_description'];?></div>
	
				<?php endif;

			/* Start the Loop */
			while ( have_posts() ) :

				the_post();

				get_template_part( 'layouts/content');

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'layouts/none' );

		endif;
		?>
		</div>
	</main><!-- #main -->

<?php

get_footer();
