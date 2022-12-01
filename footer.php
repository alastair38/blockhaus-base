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

<footer class="py-6">


<div class="place-items-center">


<div class="rounded-md space-y-4 flex flex-col items-center">
	<p class="font-black">Follow us</p>
  <?php echo blockhaus_display_social_profiles();?>
</div>


<?php

// Check rows exists.
if( have_rows('funder', 'option') ):?>

	<ul class="flex gap-4 lg:gap-12 justify-center p-6 lg:w-3/4 mx-auto">
<?php	// Loop through rows.
	while( have_rows('funder', 'option') ) : the_row();

			// Load sub field value.
			$logo_img = get_sub_field('logo');
			$name = get_sub_field('name');
			$url = get_sub_field('website');
			// echo '<code class="text-white">';
			// print_r($logo_img);
			// echo '</code>';
			?>
			<li class="flex-1 flex flex-col gap-4 items-center justify-center">
				<a class="flex-1" href="<?php echo $url;?>">
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

<p class="flex justify-center text-sm">
		<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html_e( bloginfo('name') . ' &copy; ' . date("Y") , 'Blockhaus' ), 'Blockhaus' );
				?>
</p>

</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
