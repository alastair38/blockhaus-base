<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

// $transparent =  get_field('transparent_image_layout');
// $background =  get_field('choose_background');
// if(!$background):
// 	$background = 'no';
// endif;

?>

<article id="post-<?php the_ID(); ?>" class="w-full space-y-12">

<?php get_template_part('components/full-width-header'); ?>


	

	<div class="space-y-6 p-6 w-11/12 md:w-3/4 bg-primary-default rounded-md mx-auto overflow-hidden">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blockhaus' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
