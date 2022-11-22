<?php
/**
 * Template part for displaying article link on listings / search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

	$external_link = get_field('external_link');

	if($external_link):
?>

<a class="py-1 px-4 border border-current inline-flex transition-colors duration-200 rounded-full hover:ring-4 hover:ring-offset focus:ring-4 focus:ring-offset" href="<?php echo esc_url( $external_link );?>" rel="external">View <?php echo get_post_type();?></a>

<?php else:?>

<a class="py-1 px-4 border border-current inline-flex transition-colors duration-200 rounded-full hover:ring-4 hover:ring-offset focus:ring-4 focus:ring-offset" href="<?php echo esc_url( get_permalink() );?>" rel="bookmark">View <?php echo get_post_type();?></a>

<?php endif;?>