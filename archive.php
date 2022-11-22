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

$post_type_obj = get_post_type_object( $post_type );

$description = get_field($post_type . '_page_description', "options");
?>

		<main class="main-content">

			<?php get_template_part('components/full-width-header'); ?>

			<div class="py-6 px-2 lg:p-6 bg-primary-default grid my-6 lg:my-12 rounded-md w-11/12 md:w-3/4 mx-auto grid-cols-1 <?php echo $cols;?> gap-6">

			<div class="col-span-full">
				<?php echo blockhaus_custom_form($post_type_obj->labels->name, $post_type); ?>
			</div>
				
			<?php

			if($description):?>

			<p class="col-span-full"><?php echo $description;?></p>

			<?php endif;?>

			<?php if ( have_posts() ) :
			/* Start the Loop */;
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
