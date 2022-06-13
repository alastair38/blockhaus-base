<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blockhaus
 */

?>

	<footer id="colophon" class="px-6 pt-20 place-items-center bg-white slanted-top">
<div class="grid grid-cols-3 gap-20">


<div class="p-6 rounded-md space-y-4">
	<p class="px-2 -rotate-1 bg-accent w-fit">Main links</p>
	<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer-1',
					'menu_id'        => 'footer-menu',
					'menu_class'		 => 'flex flex-col'
				)
			);
			?>
</div>

<div class="p-6 rounded-md space-y-4">
	
	<p class="px-2 -rotate-1 bg-accent w-fit">Address</p>
	<?php echo blockhaus_display_address(); ?>
</div>

<div class="p-6 rounded-md space-y-4">
	<p class="px-2 -rotate-1 bg-accent w-fit">Follow us</p>
  <?php echo blockhaus_display_social_profiles();?>
</div>

</div>	

<?php

// Check rows exists.
if( have_rows('details', 'option') ):?>
<div class="py-12">
<p class="font-bold text-center">Funders</p>
	<ul class="flex gap-12 justify-center p-6 w-3/4 mx-auto">
<?php	// Loop through rows.
	while( have_rows('details', 'option') ) : the_row();

			// Load sub field value.
			$logo_img = get_sub_field('logo');
			$name = get_sub_field('name');
			$url = get_sub_field('web_url');
			// echo '<code class="text-white">';
			// print_r($logo_img);
			// echo '</code>';
			?>
			<li class="flex-1 flex flex-col gap-4 items-center justify-center">
				<a class="flex-1 bg-white rounded-md" href="<?php echo $url;?>">
				<img class="object-contain px-2 h-full" src="<?php echo $logo_img['sizes']['medium'];?>" alt="<?php echo $logo_img['alt'];?>"/>
			</a>
			</li>
			


		<?php // Do something...

	// End loop.
	endwhile; 
else :
	// Do something...
endif;

?>
	</ul>
	</div>
<p class="flex justify-center p-6">
		<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html_e( bloginfo('name') . ' &copy; ' . date("Y") , 'Blockhaus' ), 'Blockhaus' );
				?>
</p>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
