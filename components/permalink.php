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

<a class="py-1 px-4 border border-current inline-flex transition-colors duration-200 rounded-full hover:ring-4 hover:ring-accent-tertiary focus:ring-4 focus:ring-accent-tertiary" href="<?php echo esc_url( $external_link );?>" rel="external">View <?php echo get_post_type();?></a>

<?php else:?>

<a class="py-1 px-4 border border-current inline-flex transition-colors duration-200 rounded-full hover:ring-4 hover:ring-accent-tertiary focus:ring-4 focus:ring-accent-tertiary" href="<?php echo esc_url( get_permalink() );?>" rel="bookmark">View <?php echo get_post_type();?></a>

<?php endif;?>