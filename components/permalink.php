<?php
/**
 * Template part for displaying article link on listings / search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

 /* If Blockhaus functionality plugin is activated, get any custom fields we need */

if(function_exists('get_field')):
	$external_link = get_field('external_link');
endif;

if($external_link): ?>

<a aria-label="Read <?php the_title();?>" class="rounded-md text-sm inline-block w-fit bg-secondary text-white px-6 py-2 hover:ring-2 focus:ring-2 ring-offset-2 ring-transparent hover:ring-secondary focus:ring-secondary" href="<?php echo esc_url( $external_link );?>" rel="external">View <?php echo get_post_type();?></a>

<?php else:?>

<a aria-label="Read <?php the_title();?>" class="rounded-md text-sm inline-block w-fit bg-secondary text-white px-6 py-2 hover:ring-2 focus:ring-2 ring-offset-2 ring-transparent hover:ring-secondary focus:ring-secondary" href="<?php echo esc_url( get_permalink() );?>" rel="bookmark">View <?php echo get_post_type();?></a>

<?php endif;?>