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

<footer id="colophon">

<!-- wp:group {"backgroundColor":"neutral-light-100","textColor":"primary-default","className":"p-0 bg-neutral-light-100 text-secondary"} -->
<div class="wp-block-group p-0 bg-neutral-light-100 text-secondary has-primary-default-color has-neutral-light-100-background-color has-text-color has-background"><!-- wp:html -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 220"><path fill="currentColor" fill-opacity="1" d="M0,64L60,58.7C120,53,240,43,360,58.7C480,75,600,117,720,128C840,139,960,117,1080,112C1200,107,1320,117,1380,122.7L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
<!-- /wp:html --></div>
<!-- /wp:group -->
<div class="place-items-center bg-primary-default">


<div class="rounded-md space-y-4 flex flex-col items-center">
	<p class="font-black">Follow us</p>
  <?php echo blockhaus_display_social_profiles();?>
</div>


<?php

// Check rows exists.
if( have_rows('details', 'option') ):?>

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

<p class="flex justify-center text-sm p-6">
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
