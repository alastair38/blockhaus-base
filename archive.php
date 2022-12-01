<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

get_header();

$post_type_obj = get_post_type_object( $post_type );

$postTypeMeta = get_field($post_type . '_page_settings', "options");
?>

		<main class="main-content">

			<?php get_template_part('components/full-width-header-alt'); ?>

			<div class="grid my-6 lg:my-16 rounded-md w-11/12 md:w-3/4 mx-auto grid-cols-1 md:grid-cols-3 gap-6">

			<!-- <div class="col-span-full">
				<?php echo blockhaus_custom_form($post_type_obj->labels->name, $post_type); ?>
			</div> -->
				
			<?php

			if($postTypeMeta['page_description']):?>

			<div class="col-span-full"><?php echo $postTypeMeta['page_description'];?></div>

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
