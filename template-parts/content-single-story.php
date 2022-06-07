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

			the_title( '<h1 class="has-extra-large-font-size font-black absolute right-2 left-2 bottom-2 md:left-auto md:right-6 md:bottom-6 px-2 py-1 -rotate-1 bg-yellow-300">', '</h1>' );
			blockhaus_post_thumbnail('full');

			else: 

				the_title( '<h1 class="has-extra-large-font-size font-black w-fit px-2 py-1 -rotate-1 bg-yellow-300">', '</h1>' );

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

	<?php if ( get_edit_post_link() ) : ?>
		<div class="entry-meta text-sm italic">
				<?php
				blockhaus_posted_on();
				blockhaus_posted_by();
				?>
			</div><!-- .entry-meta -->
		<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'blockhaus' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>',
				null, 
				'py-1 px-4 border border-gray-800 z-50 rounded-full bg-white fixed right-4 bottom-4'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>

	<?php $social_sharing = get_field('sharing_enabled');
	if($social_sharing):
	// if sharing is enabled on the content item, show the social media share buttons
	get_template_part( 'template-parts/content', 'share-buttons' );

	endif;?>
</article><!-- #post-<?php the_ID(); ?> -->
