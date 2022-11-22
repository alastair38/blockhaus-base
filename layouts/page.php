<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

?>

<article id="post-<?php the_ID(); ?>" class="w-11/12 md:w-3/4 space-y-6 bg-primary-default rounded-md mx-auto overflow-hidden">

	<header class="entry-header">
		
		<?php the_title( '<h1 class="has-gigantic-font-size p-6 font-black uppercase font-sans">', '</h1>' ); ?>
		
	</header><!-- .entry-header -->

	<div class="space-y-6 px-6 pb-6">

		<?php blockhaus_post_thumbnail('full'); ?>
		<?php the_content(); ?>

	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
