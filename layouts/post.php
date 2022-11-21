<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

?>

	<article id="post-<?php the_ID(); ?>" class="w-full space-y-12">
	
	<?php get_template_part('components/full-width-header'); ?>

	<div class="space-y-6 p-6 w-11/12 md:w-3/4 bg-white rounded-md mx-auto overflow-hidden">
		<?php

		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blockhaus' ),
				'after'  => '</div>',
			)
		);
		?>

	
<div class="entry-meta italic">
				<?php
				blockhaus_posted_on();
				blockhaus_posted_by();
				?>
			</div><!-- .entry-meta -->
	
	<?php $social_sharing = get_field('sharing_enabled');
	if($social_sharing):
	// if sharing is enabled on the content item, show the social media share buttons
	get_template_part( 'components/share-buttons' );

	endif;?>
</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
