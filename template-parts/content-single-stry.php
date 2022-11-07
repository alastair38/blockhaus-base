<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

?>

<article id="post-<?php the_ID(); ?>" class="p-6 w-11/12 md:w-3/4 bg-white rounded-md mx-auto space-y-6">
	<header class="post-header relative w-full">
			<?php if ( has_post_thumbnail() ) :

			the_title( '<h1 class="has-extra-large-font-size font-black absolute right-2 left-2 bottom-2 md:left-auto md:right-6 md:bottom-6 px-2 py-1 bg-yellow-300">', '</h1>' );
			blockhaus_post_thumbnail('full');

			else: 

				the_title( '<h1 class="has-extra-large-font-size font-black w-fit px-2 py-1 bg-yellow-300">', '</h1>' );

			endif; ?>
		</header><!-- .entry-header -->

	<div class="space-y-6">
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

		<div class="entry-meta italic">
				<?php
				blockhaus_posted_on();
				?>
			</div><!-- .entry-meta -->
	
	<?php $social_sharing = get_field('sharing_enabled');
	if($social_sharing):
	// if sharing is enabled on the content item, show the social media share buttons
	get_template_part( 'template-parts/content', 'share-buttons' );

	endif;?>
</article><!-- #post-<?php the_ID(); ?> -->
