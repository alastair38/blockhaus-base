<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

?>

<article id="post-<?php the_ID(); ?>" class="flex flex-col space-y-6 break-words">
<?php 
if(('project' === get_post_type()) || ('post' === get_post_type())):
blockhaus_post_thumbnail('blog'); 
endif;
?>

<div class="space-y-6">
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
<hr>
	<div class="entry-content">
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

	<footer class="entry-footer mt-auto">

		<?php get_template_part('components/permalink'); ?>
		
	</footer><!-- .entry-footer -->
		</div>
</article><!-- #post-<?php the_ID(); ?> -->
