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

	<header id="masthead" class="fixed bg-neutral-light-100 lg:bg-transparent top-0 left-0 right-0 z-50 p-2 lg:relative flex justify-between lg:p-6 items-center">
		<div class="flex items-center gap-2">

    <!doctype html>
<svg class="w-9 h-9 md:h-12 md:w-12" viewBox="25.317 86.331 551.543 410.5" width="551.543" height="410.5">
  <g transform="matrix(1, 0, 0, 1, -0.7715, 35.757001)">
    <path stroke-linecap="round" stroke-linejoin="round" d="M 183.946 242.229 L 213.71 242.229 M 213.71 242.229 L 243.474 242.229 M 213.71 242.229 L 213.71 212.465 M 213.71 242.229 L 213.71 271.993 M 117.803 186.008 L 137.646 186.008 C 148.605 186.008 157.489 177.124 157.489 166.165 L 157.489 146.323 C 157.489 135.364 148.605 126.48 137.646 126.48 L 117.803 126.48 C 106.844 126.48 97.961 135.364 97.961 146.323 L 97.961 166.165 C 97.961 177.124 106.844 186.008 117.803 186.008 Z M 117.803 271.993 L 137.646 271.993 C 148.605 271.993 157.489 263.109 157.489 252.15 L 157.489 232.308 C 157.489 221.349 148.605 212.465 137.646 212.465 L 117.803 212.465 C 106.844 212.465 97.961 221.349 97.961 232.308 L 97.961 252.15 C 97.961 263.109 106.844 271.993 117.803 271.993 Z M 203.788 186.008 L 223.631 186.008 C 234.59 186.008 243.474 177.124 243.474 166.165 L 243.474 146.323 C 243.474 135.364 234.59 126.48 223.631 126.48 L 203.788 126.48 C 192.829 126.48 183.946 135.364 183.946 146.323 L 183.946 166.165 C 183.946 177.124 192.829 186.008 203.788 186.008 Z" style="fill: none; stroke-width: 1.5px;"></path>
    <g transform="matrix(1, 0, 0, 1, 60.385967, -49.426235)">
      <rect style="fill: rgb(146, 246, 218);" transform="matrix(0.707107, 0.707107, -0.707107, 0.707107, 117.058708, -301.225037)" x="371.647" y="195.771" width="190" height="190" rx="5" ry="5"></rect>
      <rect style="fill: rgb(40, 44, 69);" transform="matrix(0.707107, 0.707107, -0.707107, 0.707107, 258.531372, -159.425644)" x="371.648" y="195.77" width="190" height="190" rx="5" ry="5"></rect>
      <rect style="fill: rgb(255, 35, 226);" transform="matrix(0.707107, 0.707107, -0.707107, 0.707107, -24.311443, -159.425644)" x="371.648" y="195.77" width="190" height="190" rx="5" ry="5"></rect>
    </g>
  </g>
</svg>

   
				<span class="text-xl font-black absolute lg:relative w-1/2 ml-[25%] text-center lg:w-auto lg:ml-auto"><a class="text-offset" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
			
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation flex gap-0 lg:gap-6 items-center py-2 h-10 lg:px-6 overflow-hidden">
		
			<button class="menu-toggle text-sm flex items-center gap-1 font-sans lg:hidden font-bold uppercase aspect-square rounded-full px-2" aria-controls="primary-menu" aria-expanded="false"><span id="mobile-menu-text" class="sr-only"><?php esc_html_e( 'Menu', 'blockhaus' ); ?></span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
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

echo '<div class="flex flex-col fixed bottom-4 left-4 w-fit gap-2 z-50 items-center justify-center">';

  blockhaus_post_edit_link();
  
  blockhaus_admin_link();

  blockhaus_logout_link();

echo '</div>';
}?>
	</header><!-- #masthead -->
