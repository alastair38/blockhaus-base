<?php
/**
 * Template part for displaying content in page-full.php and single.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

?>

<article id="post-<?php the_ID(); ?>" class="w-full space-y-6">

	<?php get_template_part('components/full-width-header'); ?>
	
	<div class="gap-6 md:gap-12 grid grid-cols-1 md:grid-cols-3">

		<?php get_template_part('components/main-content'); ?>
		
		<aside class="md:sticky top-24 entry-meta col-span-1 text-sm md:p-6 md:bg-neutral-light-100 h-max space-y-6">

		<?php get_template_part( 'components/post-meta' );?>

		</aside>

	</div>

</article>