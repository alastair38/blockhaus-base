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

<footer class="mt-12 md:mt-24 text-sm">

<?php

// Check rows exists.
if( have_rows('funder', 'option') ):?>

	<ul aria-label="Project funders and partners" class="flex gap-4 lg:gap-12 justify-center px-6 py-12 lg:w-3/4 mx-auto">
		<?php	// Loop through rows.
			while( have_rows('funder', 'option') ) : the_row();

					// Load sub field value.
					$logo_img = get_sub_field('logo');
					$name = get_sub_field('name');
					$url = get_sub_field('website');
			
					?>
					<li class="flex-1 flex flex-col gap-4 items-center justify-center">
						<a aria-label="<?php echo $name;?> website" class="flex-1" href="<?php echo $url;?>">
						<img loading="lazy" class="p-2 h-full" height='100' width='auto' src="<?php echo $logo_img['sizes']['thumbnail'];?>" alt="<?php echo $logo_img['alt'];?>"/>
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
	
<div class="p-2 md:p-6 bg-secondary text-primary">
	
	<div class="place-items-center grid grid-flow-row md:grid-flow-col auto-cols-fr gap-6 py-6 bg-secondary text-primary ">
		
		<?php echo blockhaus_display_address();?>
		

  	<?php echo blockhaus_display_social_profiles();?>

		<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-1',
							'menu_id'        => 'footer-menu',
							'menu_class'		 => 'flex gap-2 md:gap-0 md:flex-col',
							'container'			 => 'nav',
							'container_aria_label'	=> 'footer menu',
						)
					);
		?>

		</div>
			<p class="text-center text-tiny pt-6">
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
