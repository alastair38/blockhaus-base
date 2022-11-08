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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page-blockhaus" class="h-full flex flex-col">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'blockhaus' ); ?></a>

	<header id="masthead" class="bg-white fixed top-0 left-0 right-0 z-50 p-2 lg:relative flex justify-between lg:p-6 items-center">
		<div class="flex items-center gap-2">
    
<svg class="w-12 h-12 rounded-full" viewBox="0 0 900 900" width="900" height="900">
  <g transform="matrix(1, 0, 0, 1, 128.009905, 243.107822)" style="">
    <g>
      <rect x="-128.01" width="900" height="898.187" y="-243.108" style="fill: rgb(64, 206, 229);"></rect>
    </g>
    <path d="M -128.01 122.832 L -103.01 118.998 C -78.01 115.026 -28.01 107.358 21.99 108.042 C 71.99 108.728 121.99 117.765 171.99 132.144 C 221.99 146.522 271.99 166.242 321.99 193.355 C 371.99 220.468 421.99 255.252 471.99 271.821 C 521.99 288.528 571.99 287.158 621.99 264.562 C 671.99 241.969 721.99 198.148 746.99 176.238 L 771.99 154.329 L 771.99 656.892 L 746.99 656.892 C 721.99 656.892 671.99 656.892 621.99 656.892 C 571.99 656.892 521.99 656.892 471.99 656.892 C 421.99 656.892 371.99 656.892 321.99 656.892 C 271.99 656.892 221.99 656.892 171.99 656.892 C 121.99 656.892 71.99 656.892 21.99 656.892 C -28.01 656.892 -78.01 656.892 -103.01 656.892 L -128.01 656.892 L -128.01 122.832 Z" style="fill: rgb(64, 224, 208);"></path>
    <path d="M -128.01 171.383 L -103.01 167.897 C -78.01 164.287 -28.01 157.316 21.99 157.937 C 71.99 158.561 121.99 166.777 171.99 179.849 C 221.99 192.92 271.99 210.847 321.99 235.495 C 371.99 260.143 421.99 291.764 471.99 306.827 C 521.99 322.015 571.99 320.77 621.99 300.228 C 671.99 279.689 721.99 239.852 746.99 219.934 L 771.99 200.016 L 771.99 656.892 L 746.99 656.892 C 721.99 656.892 671.99 656.892 621.99 656.892 C 571.99 656.892 521.99 656.892 471.99 656.892 C 421.99 656.892 371.99 656.892 321.99 656.892 C 271.99 656.892 221.99 656.892 171.99 656.892 C 121.99 656.892 71.99 656.892 21.99 656.892 C -28.01 656.892 -78.01 656.892 -103.01 656.892 L -128.01 656.892 L -128.01 171.383 Z" style="fill: rgb(255, 255, 255);"></path>
    <path d="M -128.01 219.934 L -103.01 216.797 C -78.01 213.547 -28.01 207.273 21.99 207.833 C 71.99 208.394 121.99 215.789 171.99 227.553 C 221.99 239.317 271.99 255.451 321.99 277.635 C 371.99 299.818 421.99 328.277 471.99 341.834 C 521.99 355.503 571.99 354.382 621.99 335.895 C 671.99 317.409 721.99 281.556 746.99 263.63 L 771.99 245.703 L 771.99 656.892 L 746.99 656.892 C 721.99 656.892 671.99 656.892 621.99 656.892 C 571.99 656.892 521.99 656.892 471.99 656.892 C 421.99 656.892 371.99 656.892 321.99 656.892 C 271.99 656.892 221.99 656.892 171.99 656.892 C 121.99 656.892 71.99 656.892 21.99 656.892 C -28.01 656.892 -78.01 656.892 -103.01 656.892 L -128.01 656.892 L -128.01 219.934 Z" style="fill: rgb(167, 217, 212);"></path>
    <path d="M -128.01 268.485 L -103.01 265.696 C -78.01 262.808 -28.01 257.23 21.99 257.728 C 71.99 258.227 121.99 264.8 171.99 275.258 C 221.99 285.715 271.99 300.056 321.99 319.775 C 371.99 339.493 421.99 364.789 471.99 376.841 C 521.99 388.99 571.99 387.994 621.99 371.561 C 671.99 355.128 721.99 323.26 746.99 307.326 L 771.99 291.391 L 771.99 656.892 L 746.99 656.892 C 721.99 656.892 671.99 656.892 621.99 656.892 C 571.99 656.892 521.99 656.892 471.99 656.892 C 421.99 656.892 371.99 656.892 321.99 656.892 C 271.99 656.892 221.99 656.892 171.99 656.892 C 121.99 656.892 71.99 656.892 21.99 656.892 C -28.01 656.892 -78.01 656.892 -103.01 656.892 L -128.01 656.892 L -128.01 268.485 Z" style="fill: rgb(210, 175, 255);"></path>
    <g>
      <path d="M -128.01 317.034 L -103.01 314.594 C -78.01 312.067 -28.01 307.187 21.99 307.623 C 71.99 308.059 121.99 313.81 171.99 322.96 C 221.99 332.11 271.99 344.66 321.99 361.914 C 371.99 379.167 421.99 401.302 471.99 411.846 C 521.99 422.478 571.99 421.605 621.99 407.227 C 671.99 392.849 721.99 364.963 746.99 351.02 L 771.99 337.078 L 771.99 656.892 L 746.99 656.892 C 721.99 656.892 671.99 656.892 621.99 656.892 C 571.99 656.892 521.99 656.892 471.99 656.892 C 421.99 656.892 371.99 656.892 321.99 656.892 C 271.99 656.892 221.99 656.892 171.99 656.892 C 121.99 656.892 71.99 656.892 21.99 656.892 C -28.01 656.892 -78.01 656.892 -103.01 656.892 L -128.01 656.892 L -128.01 317.034 Z" style="fill: rgb(252, 159, 212);"></path>
    </g>
  </g>
</svg>

  
		<!-- <svg class="h-12 w-12" viewBox="0 0 900 900" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:bx="https://boxy-svg.com">
  <defs>
    <pattern id="pattern-0-0" patternTransform="matrix(10.232371, 0, 0, 10.232371, -152.29599, -206.534256)" xlink:href="#pattern-0"/>
    <pattern id="pattern-0" viewBox="0 0 900 901" patternUnits="userSpaceOnUse" preserveAspectRatio="none" width="100" height="100" bx:pinned="true">
      <rect x="0" width="900" height="900" y="0" style="fill: rgb(255, 184, 28);" transform="matrix(1, 0, 0, 1, 0, 0)"/>
      <path d="M0 473L25 467.2C50 461.3 100 449.7 150 452.7C200 455.7 250 473.3 300 471.5C350 469.7 400 448.3 450 438C500 427.7 550 428.3 600 427.8C650 427.3 700 425.7 750 431.7C800 437.7 850 451.3 875 458.2L900 465L900 901L875 901C850 901 800 901 750 901C700 901 650 901 600 901C550 901 500 901 450 901C400 901 350 901 300 901C250 901 200 901 150 901C100 901 50 901 25 901L0 901Z" style="fill: rgb(224, 60, 49);" transform="matrix(1, 0, 0, 1, 0, 0)"/>
      <path d="M0 442L25 460.7C50 479.3 100 516.7 150 530.7C200 544.7 250 535.3 300 528.8C350 522.3 400 518.7 450 500.7C500 482.7 550 450.3 600 449.3C650 448.3 700 478.7 750 500.2C800 521.7 850 534.3 875 540.7L900 547L900 901L875 901C850 901 800 901 750 901C700 901 650 901 600 901C550 901 500 901 450 901C400 901 350 901 300 901C250 901 200 901 150 901C100 901 50 901 25 901L0 901Z" style="fill: rgb(14, 137, 90);" transform="matrix(1, 0, 0, 1, 0, 0)"/>
      <path d="M0 511L25 508.2C50 505.3 100 499.7 150 500.2C200 500.7 250 507.3 300 517.8C350 528.3 400 542.7 450 562.5C500 582.3 550 607.7 600 619.8C650 632 700 631 750 614.5C800 598 850 566 875 550L900 534L900 901L875 901C850 901 800 901 750 901C700 901 650 901 600 901C550 901 500 901 450 901C400 901 350 901 300 901C250 901 200 901 150 901C100 901 50 901 25 901L0 901Z" style="fill: rgb(0, 119, 73);" transform="matrix(1, 0, 0, 1, 0, 0)"/>
      <path d="M0 603L25 608.8C50 614.7 100 626.3 150 633.7C200 641 250 644 300 651.3C350 658.7 400 670.3 450 663.2C500 656 550 630 600 630C650 630 700 656 750 657.8C800 659.7 850 637.3 875 626.2L900 615L900 901L875 901C850 901 800 901 750 901C700 901 650 901 600 901C550 901 500 901 450 901C400 901 350 901 300 901C250 901 200 901 150 901C100 901 50 901 25 901L0 901Z" style="fill: rgba(0, 21, 137, 0.26);" transform="matrix(1, 0, 0, 1, 0, 0)"/>
      <path d="M0 744L25 734.8C50 725.7 100 707.3 150 702.5C200 697.7 250 706.3 300 719.7C350 733 400 751 450 757C500 763 550 757 600 748.5C650 740 700 729 750 720.3C800 711.7 850 705.3 875 702.2L900 699L900 901L875 901C850 901 800 901 750 901C700 901 650 901 600 901C550 901 500 901 450 901C400 901 350 901 300 901C250 901 200 901 150 901C100 901 50 901 25 901L0 901Z" style="fill: rgba(0, 21, 137, 0.53);" transform="matrix(1, 0, 0, 1, 0, 0)"/>
      <path d="M0 755L25 756.7C50 758.3 100 761.7 150 766.7C200 771.7 250 778.3 300 783C350 787.7 400 790.3 450 797.2C500 804 550 815 600 820.7C650 826.3 700 826.7 750 822.3C800 818 850 809 875 804.5L900 800L900 901L875 901C850 901 800 901 750 901C700 901 650 901 600 901C550 901 500 901 450 901C400 901 350 901 300 901C250 901 200 901 150 901C100 901 50 901 25 901L0 901Z" style="fill: rgba(0, 0, 0, 0.57);" transform="matrix(1, 0, 0, 1, 0, 0)"/>
    </pattern>
  </defs>
  <ellipse style="fill: url(#pattern-0-0); paint-order: fill;" cx="359.322" cy="305.085" rx="442.242" ry="442.242" transform="matrix(0.999951, -0.009903, 0.009903, 0.999951, 87.67437, 148.488342)"/>
</svg> -->
				<span class="has-extra-large-font-size font-black"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
			
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation flex gap-0 lg:gap-6 items-center py-2 h-10 px-6 overflow-hidden">
		
			<button class="menu-toggle text-sm flex items-center gap-1 font-sans lg:hidden font-bold uppercase bg-white px-2 shadow-md rounded-full" aria-controls="primary-menu" aria-expanded="false"><span id="mobile-menu-text"><?php esc_html_e( 'Menu', 'blockhaus' ); ?></span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
</svg></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'		 => 'flex flex-col text-2xl lg:text-base lg:flex-row absolute lg:relative left-0 right-0 top-0 -z-10 lg:z-0 bg-gray-100 -translate-y-full lg:translate-y-0 invisible lg:visible lg:bg-transparent h-screen lg:h-auto justify-center items-center ml-auto ease-in-out duration-200'
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
