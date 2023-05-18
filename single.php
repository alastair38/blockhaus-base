<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package blockhaus
 */

get_header();
?>

<main id="primary" class="main-content w-11/12 mx-auto mt-6">

		<?php
		while ( have_posts() ) :
			the_post();

			// get_template_part( 'layouts/content', 'page' );
			get_template_part( 'layouts/full-width');
			
			//If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
			$comment_count = get_comments_number();
			?>
			
			<div class="comments-panel my-12">
      <h2 id="comments-panel-title">
        <button class="comments-panel-trigger flex items-center gap-2 pl-3 pr-2 py-1 rounded-full bg-accent-default focus:ring-2 ring-offset-2 ring-transparent focus:ring-accent-default" aria-expanded="false" aria-controls="comments-panel-content">
				<?php if ( '1' === $comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( '%u comment', 'blockhaus' ), number_format_i18n( $comment_count )
				);
			} else {
				printf( 
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%u comment;', '%u comments', $comment_count, 'comments title', 'blockhaus' ) ),
					number_format_i18n( $comment_count )
				);
			}?>
				
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
</svg>

        </button>
      </h2>
      <div class="comments-content" role="region" aria-labelledby="comments-panel-title" aria-hidden="true" id="comments-panel-content">
			<?php comments_template();?>
      </div>
    </div>
	

			<?php	endif;
				
			get_template_part( 'components/related-articles' );
			
			the_post_navigation(
				array(
					'prev_text' => '<span aria-hidden="true" class="nav-subtitle font-bold"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					<path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
				</svg></span> <span class="nav-title sr-only md:not-sr-only pl-2">%title</span>',
					'next_text' => '<span class="nav-title sr-only md:not-sr-only pl-2">%title</span><span aria-hidden="true" class="nav-subtitle font-bold"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
				</svg></span>',
				)
			);

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

get_footer();
