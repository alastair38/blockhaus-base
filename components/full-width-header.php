<?php
/**
 * Full width header component
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

 // get the header object from blockhaus_header_layout()

?>

<header class="entry-header space-y-6">
	
	<?php if(is_singular() && has_post_thumbnail()):
	the_post_thumbnail( 'full', ['class' => 'w-full aspect-[3/1] h-full col-start-1 row-start-1 object-top object-cover'] );
 endif;?>

<h1 class="page-title leading-snug lg:leading-normal text-xl font-black text-neutral-dark-900"><?php the_title();?></h1>
<hr>



</header><!-- .page-header -->