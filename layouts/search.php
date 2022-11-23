<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

?>

<article id="post-<?php the_ID(); ?>" class="space-y-6">
	<header class="entry-header">

	<span aria-label="Content type: <?php 'post' !== get_post_type() ? print(get_post_type()) : print('News and Events');?>" class="post-type inline-flex mb-6 bg-highlight px-3 py-1 rounded-full uppercase has-small-font-size"><?php 'post' !== get_post_type() ? print(get_post_type()) : print('News and Events');?></span>

	

		<?php the_title(sprintf( '<h2 class="has-large-font-size">', '%s' ), '</h2>');
 		?>

		<div class="entry-meta flex gap-2">
		
			<?php blockhaus_posted_on(); ?>

		</div><!-- .entry-meta -->
		
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer flex justify-between">

	<?php get_template_part('components/permalink'); ?>
		
	</footer><!-- .entry-footer -->
	<hr>
</article><!-- #post-<?php the_ID(); ?> -->
