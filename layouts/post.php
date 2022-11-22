<?php
/**
 * Template part for displaying post content in single.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

?>

<article id="post-<?php the_ID(); ?>" class="w-full space-y-12">
	
	<?php get_template_part('components/full-width-header'); ?>

	<?php get_template_part('components/main-content'); ?>
	
</article><!-- #post-<?php the_ID(); ?> -->
