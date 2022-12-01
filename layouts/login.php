<?php
/**
 * Template part for displaying login page in page-login.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

?>

<article id="post-<?php the_ID(); ?>" class="p-6 w-11/12 md:w-3/4 mx-auto space-y-6">
	<header class="entry-header sr-only">
		<?php 
		if( !is_user_logged_in()): 
			the_title( '<h1 class="has-gigantic-font-size font-black">', '</h1>' ); 
		else:
			echo '<h1 class="has-gigantic-font-size font-black">Logged in</h1>';
		endif;
		?>
		
	</header><!-- .entry-header -->

	<div class="space-y-6">
		<div>
		<?php the_content();?>

		<?php get_template_part('components/login-form'); ?>

		</div>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
