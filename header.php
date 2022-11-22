<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blockhaus
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/site.webmanifest">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page-blockhaus" class="h-full flex flex-col">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'blockhaus' ); ?></a>

	<header id="masthead" class="bg-primary-default fixed top-0 left-0 right-0 z-50 p-2 lg:relative flex justify-between lg:p-6 items-center">
		<div class="flex items-center gap-2">

    <svg class="w-9 h-9 md:h-12 md:w-12" viewBox="22.363 31.029 807.334 807.334" width="807.334px" height="807.334px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:bx="https://boxy-svg.com">
  <defs>
    <pattern id="pattern-2-0" patternTransform="matrix(9.943775, -2.106625, 2.222686, 10.491615, -143.403405, 4.558059)" xlink:href="#pattern-2"/>
    <pattern id="pattern-2" viewBox="0 0 900 898.187" patternUnits="userSpaceOnUse" preserveAspectRatio="none" width="100" height="100" bx:pinned="true">
      <g transform="matrix(1, 0, 0, 1, 0, 203.19105529785156)">
        <g transform="matrix(1, 0, 0, 1, 128.009995, 39.916946)">
          <rect x="-128.01" width="900" height="898.187" y="-243.108" style="fill: rgb(64, 206, 229);"/>
        </g>
        <path d="M 0 51.333 L 25 46.712 C 50 41.926 100 32.684 150 33.509 C 200 34.335 250 45.226 300 62.557 C 350 79.885 400 103.652 450 136.331 C 500 169.007 550 210.929 600 230.899 C 650 251.035 700 249.384 750 222.15 C 800 194.92 850 142.106 875 115.7 L 900 89.294 L 900 694.996 L 875 694.996 C 850 694.996 800 694.996 750 694.996 C 700 694.996 650 694.996 600 694.996 C 550 694.996 500 694.996 450 694.996 C 400 694.996 350 694.996 300 694.996 C 250 694.996 200 694.996 150 694.996 C 100 694.996 50 694.996 25 694.996 L 0 694.996 L 0 51.333 Z" style="fill: rgb(67, 216, 239);"/>
        <path d="M 0 143.484 L 25 139.524 C 50 135.422 100 127.505 150 128.211 C 200 128.92 250 138.251 300 153.1 C 350 167.947 400 188.312 450 216.312 C 500 244.31 550 280.232 600 297.341 C 650 314.595 700 313.179 750 289.846 C 800 266.514 850 221.261 875 198.635 L 900 176.01 L 900 694.996 L 875 694.996 C 850 694.996 800 694.996 750 694.996 C 700 694.996 650 694.996 600 694.996 C 550 694.996 500 694.996 450 694.996 C 400 694.996 350 694.996 300 694.996 C 250 694.996 200 694.996 150 694.996 C 100 694.996 50 694.996 25 694.996 L 0 694.996 L 0 143.484 Z" style="fill: rgb(99, 222, 241);"/>
        <path d="M 0 205.587 L 25 202.073 C 50 198.433 100 191.406 150 192.032 C 200 192.661 250 200.943 300 214.12 C 350 227.297 400 245.367 450 270.213 C 500 295.059 550 326.934 600 342.119 C 650 357.429 700 356.174 750 335.467 C 800 314.763 850 274.605 875 254.527 L 900 234.449 L 900 694.996 L 875 694.996 C 850 694.996 800 694.996 750 694.996 C 700 694.996 650 694.996 600 694.996 C 550 694.996 500 694.996 450 694.996 C 400 694.996 350 694.996 300 694.996 C 250 694.996 200 694.996 150 694.996 C 100 694.996 50 694.996 25 694.996 L 0 694.996 L 0 205.587 Z" style="fill: rgb(255, 255, 255);"/>
        <path d="M 0 258.038 L 25 254.901 C 50 251.651 100 245.377 150 245.937 C 200 246.498 250 253.893 300 265.657 C 350 277.421 400 293.555 450 315.739 C 500 337.922 550 366.381 600 379.938 C 650 393.607 700 392.486 750 373.999 C 800 355.513 850 319.66 875 301.734 L 900 283.807 L 900 694.996 L 875 694.996 C 850 694.996 800 694.996 750 694.996 C 700 694.996 650 694.996 600 694.996 C 550 694.996 500 694.996 450 694.996 C 400 694.996 350 694.996 300 694.996 C 250 694.996 200 694.996 150 694.996 C 100 694.996 50 694.996 25 694.996 L 0 694.996 L 0 258.038 Z" style="fill: rgb(152, 242, 208);"/>
        <path d="M 0 320.775 L 25 318.087 C 50 315.305 100 309.931 150 310.41 C 200 310.891 250 317.224 300 327.3 C 350 337.375 400 351.192 450 370.191 C 500 389.189 550 413.561 600 425.173 C 650 436.878 700 435.919 750 420.086 C 800 404.253 850 373.549 875 358.197 L 900 342.844 L 900 694.996 L 875 694.996 C 850 694.996 800 694.996 750 694.996 C 700 694.996 650 694.996 600 694.996 C 550 694.996 500 694.996 450 694.996 C 400 694.996 350 694.996 300 694.996 C 250 694.996 200 694.996 150 694.996 C 100 694.996 50 694.996 25 694.996 L 0 694.996 L 0 320.775 Z" style="fill: rgb(132, 239, 198);"/>
        <path d="M 0 355.138 L 25 352.698 C 50 350.171 100 345.291 150 345.727 C 200 346.163 250 351.914 300 361.064 C 350 370.214 400 382.764 450 400.018 C 500 417.271 550 439.406 600 449.95 C 650 460.582 700 459.709 750 445.331 C 800 430.953 850 403.067 875 389.124 L 900 375.182 L 900 694.996 L 875 694.996 C 850 694.996 800 694.996 750 694.996 C 700 694.996 650 694.996 600 694.996 C 550 694.996 500 694.996 450 694.996 C 400 694.996 350 694.996 300 694.996 C 250 694.996 200 694.996 150 694.996 C 100 694.996 50 694.996 25 694.996 L 0 694.996 L 0 355.138 Z" style="fill: rgb(125, 234, 192);"/>
      </g>
    </pattern>
  </defs>
  <ellipse style="fill: url(#pattern-2-0);" cx="426.03" cy="434.696" rx="403.667" ry="403.667"/>
</svg>
				<span class="has-extra-large-font-size font-black absolute lg:relative w-1/2 ml-[25%] text-center lg:w-auto lg:ml-auto"><a class="text-accent-default" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
			
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation flex gap-0 lg:gap-6 items-center py-2 h-10 lg:px-6 overflow-hidden">
		
			<button class="menu-toggle bg-highlight text-primary-default text-sm flex items-center gap-1 font-sans lg:hidden font-bold uppercase border aspect-square rounded-full px-2" aria-controls="primary-menu" aria-expanded="false"><span id="mobile-menu-text" class="sr-only"><?php esc_html_e( 'Menu', 'blockhaus' ); ?></span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
</svg></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'		 => 'flex flex-col lg:leading-none text-2xl lg:text-base lg:flex-row absolute lg:relative left-0 right-0 top-0 -z-10 lg:z-0 bg-gray-100 -translate-y-full lg:translate-y-0 invisible lg:visible lg:bg-transparent gap-4 lg:gap-6 h-screen lg:h-auto justify-center items-center ml-auto ease-in-out duration-200'
				)
			);
			?>
		
		</nav><!-- #site-navigation -->

    
<?php if( is_user_logged_in() ) {

echo '<div class="flex flex-col fixed bottom-4 right-4 w-fit gap-2 z-50 items-center justify-center">';

  blockhaus_post_edit_link();
  
  blockhaus_admin_link();

  blockhaus_logout_link();

echo '</div>';
}?>
	</header><!-- #masthead -->
