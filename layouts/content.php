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
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="text-lg font-bold">', '</h2>' );
		endif;

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
	<?php
	
	$external_link = get_field('external_link');

	if($external_link):
	?>

	<a class="py-1 px-4 border border-current inline-flex transition-colors duration-200 rounded-full hover:ring-4 hover:ring-offset focus:ring-4 focus:ring-offset" href="<?php echo esc_url( $external_link );?>" rel="external">View <?php echo get_post_type();?></a>

	<?php else:?>

	<a class="py-1 px-4 border border-current inline-flex transition-colors duration-200 rounded-full hover:ring-4 hover:ring-offset focus:ring-4 focus:ring-offset" href="<?php echo esc_url( get_permalink() );?>" rel="bookmark">View <?php echo get_post_type();?></a>

	<?php endif;?>
		<!-- <?php blockhaus_entry_footer(); ?> -->
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
