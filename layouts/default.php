<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

?>

<article id="post-<?php the_ID(); ?>" class="w-11/12 md:w-3/4 space-y-6 bg-primary rounded-md mx-auto overflow-hidden">

	<?php get_template_part('components/default-header'); ?>

	<div class="space-y-6 px-6 pb-6">

		<?php blockhaus_post_thumbnail('full'); ?>
		<?php the_content(); ?>

	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
