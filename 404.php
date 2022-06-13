<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package blockhaus
 */

get_header();
?>

<main id="primary" class="main-content py-20 lg:pt-8 lg:pb-20">

		<section class="p-6 w-11/12 md:w-3/4 bg-white rounded-md mx-auto space-y-6">
			<header class="page-header">
				<h1 class="has-gigantic-font-size font-black"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'blockhaus' ); ?></h1>
			</header><!-- .page-header -->

			<div class="space-y-6">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try the search?', 'blockhaus' ); ?></p>

					<?php
					get_search_form();
					?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
