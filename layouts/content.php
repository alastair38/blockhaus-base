<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

?>

<article id="post-<?php the_ID(); ?>" class="p-6 bg-primary-default border border-neutral-light-500 flex flex-col gap-2 rounded-md shadow-md">
<?php 
if(('project' === get_post_type()) || ('post' === get_post_type())):
blockhaus_post_thumbnail('landscape'); 
endif;
?>
	<header class="entry-header">
		<?php
		
			the_title( '<h2 class="text-lg font-bold">', '</h2>' );

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta text-sm italic">
				<?php
				blockhaus_posted_on();
			
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content mt-auto">
		<?php

		if(('publication' === get_post_type()) || ('link' === get_post_type())):

			the_content();

		else:

			the_excerpt();

		endif;

	
		$external_site = get_field('external_site');

		if($external_site):
		?>

		<p class="py-3 inline-flex text-sm italic"><?php echo 'This content is published at ' . $external_site;?></p>

		<?php endif;?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php get_template_part('components/permalink'); ?>
		
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
