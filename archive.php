<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

get_header();


if(is_post_type_archive( 'project' )):
	$cols = 'md:grid-cols-3';
endif;


$description = get_field($post_type . '_page_description', "options");
?>

	<!-- <main id="primary" class="pt-20 lg:p-6 bg-primary-default my-12 rounded-md w-11/12 md:w-3/4 mx-auto grid-cols-1 md:grid-cols-3 gap-6"> -->
		<main class="main-content">

			<?php get_template_part('components/full-width-header'); ?>

			<div class="p-6 my-12 bg-primary-default grid rounded-md w-11/12 md:w-3/4 mx-auto grid-cols-1 <?php echo $cols;?> gap-6">

			<div class="col-span-full"><?php echo blockhaus_custom_form("Search " . $post_type_obj->labels->name . " ..."); ?></div>
				
			<?php

			if($description):?>

			<p class="col-span-full"><?php echo $description;?></p>

			<?php endif;?>

			<?php if ( have_posts() ) :
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
