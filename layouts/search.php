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

		<?php if ( 'post' !== get_post_type() ) :
					echo '<span aria-label="Content type: ' . get_post_type() . ' " class="post-type inline-flex mb-6 bg-highlight px-3 py-1 rounded-full uppercase has-small-font-size">' . get_post_type() . '</span>';
				else:
					echo '<span aria-label="Content type: News and events" class="post-type inline-flex mb-6 bg-highlight px-3 py-1 rounded-full uppercase has-small-font-size">News and events</span>';
		endif; ?>

		<?php the_title(sprintf( '<h2 class="has-large-font-size">', '%s' ), '</h2>');
 		?>

		<div class="entry-meta flex gap-2">
		
			<?php
			blockhaus_posted_on();

			if ( 'page' !== get_post_type() ) :
			blockhaus_posted_by();
			endif; ?>


		</div><!-- .entry-meta -->
		
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>

		<a class="py-1 px-4 border border-current inline-flex mt-6 rounded-full hover:bg-primary-default transition-colors duration-200 hover:ring-4 hover:ring-offset focus:ring-4 focus:ring-offset" aria-label="<?php the_title();?>" href="<?php echo esc_url( get_permalink() );?>" rel="bookmark">View <?php echo get_post_type();?></a>
	</div><!-- .entry-summary -->

	<footer class="entry-footer flex justify-between">
		
	</footer><!-- .entry-footer -->
	<hr>
</article><!-- #post-<?php the_ID(); ?> -->
