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
	
	<header class="entry-header grid grid-cols-header relative h-80 bg-curves bg-fixed bg-cover overflow-hidden">

		<?php 
		$transparent =  get_field('transparent_image_layout');

		the_title( '<h1 class="page-title z-0 mb-6 w-fit col-start-2 row-start-1 place-self-end justify-self-start bg-primary-default has-gigantic-font-size px-6 font-black uppercase">', '</h1>' );
		if ( has_post_thumbnail() ):
		if($transparent):?>
		<?php the_post_thumbnail( 'full', ['class' => 'h-80 place-self-end p-2 col-start-2 row-start-1 object-cover'] ); ?>
		
		<?php else: ?>
			<?php the_post_thumbnail( 'full', ['class' => 'h-80 w-full col-span-full row-start-1 object-cover'] ); ?>
		
		<?php endif;
		endif;
	?>
		</header><!-- .page-header -->

	

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
	get_template_part( 'template-parts/content', 'share-buttons' );

	endif;?>
</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
