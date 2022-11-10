<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

get_header();

$header_image = get_field(get_post_type() . '_header', 'options');
$transparent =  get_field(get_post_type() . '_page_transparent_header', 'options');
$background =  get_field(get_post_type() . '_choose_background', 'options');
if(!$background):
	$background = 'no';
endif;
$post_type = get_post_type();
if($post_type === 'project'):
	$cols = 'md:grid-cols-3';
endif;

?>

	<!-- <main id="primary" class="pt-20 lg:p-6 bg-primary-default my-12 rounded-md w-11/12 md:w-3/4 mx-auto grid-cols-1 md:grid-cols-3 gap-6"> -->
		<main class="main-content">

			<!-- <header class="col-span-full"> -->

			<header class="entry-header grid grid-cols-header relative h-80 has-<?php echo $background;?>-background-color has-background bg-curves bg-fixed bg-cover overflow-hidden">

			<?php 

			the_archive_title( '<h1 class="page-title z-0 mb-6 w-fit col-start-2 row-start-1 place-self-end justify-self-start bg-primary-default has-gigantic-font-size px-6 font-black uppercase">', '</h1>' );
			if($header_image):
			if($transparent):?>
			<img class="h-80 place-self-end p-2 col-start-2 row-start-1 object-cover" src="<?php echo $header_image['url'];?>" alt="<?php echo $header_image['alt'];?>">
			<?php else: ?>

			<img class="h-80 w-full col-span-full row-start-1 object-cover" src="<?php echo $header_image['url'];?>" alt="<?php echo $header_image['alt'];?>">

			<?php endif;
			endif; ?>
			</header><!-- .page-header -->
	<!-- 		<div class="wp-block-group p-0 has-<?php echo $background;?>-background-color has-background text-neutral-light-100">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 220"><path fill="currentColor" fill-opacity="1" d="M0,64L60,58.7C120,53,240,43,360,58.7C480,75,600,117,720,128C840,139,960,117,1080,112C1200,107,1320,117,1380,122.7L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
<!-- /wp:html </div>-->
<!-- /wp:group -->


			<div class="p-6 my-12 bg-primary-default grid rounded-md w-11/12 md:w-3/4 mx-auto grid-cols-1 <?php echo $cols;?> gap-6">
				
			<?php $description = get_field(get_post_type() . '_page_description', "options");

			if($description):?>

			<p class="col-span-full"><?php echo $description;?></p>

			<?php endif;?>

			<?php if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
