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

$description = get_field(get_post_type() . '_page_description', "options");

?>

	<main class="main-content lg:pb-20">

		<?php get_template_part('components/full-width-header'); ?>

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :?>

				<div class="py-6 px-2 lg:p-6 bg-primary-default grid my-6 lg:my-12 rounded-md w-11/12 md:w-3/4 mx-auto grid-cols-1 md:grid-cols-3 gap-6">

				<div class="col-span-full"><?php echo blockhaus_custom_form('News and Events', 'post'); ?></div>

				<?php
				
			endif;

			if($description):?>

			<p class="col-span-full"><?php echo $description . $post_type;?></p>

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
