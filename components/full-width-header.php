<?php
/**
 * Full width header component
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

$post_type = get_post_type();


if(is_archive() && ! is_search()):
	$header_image = get_field($post_type . '_header', 'options');
	$transparent_image = get_field($post_type . '_page_transparent_header', 'options');
	$background =  get_field($post_type . '_choose_background', 'options');
	$title = get_the_archive_title();
elseif ( is_home() && ! is_front_page() ) :
	$header_image = get_field($post_type . '_header', 'options');
	$transparent_image = get_field($post_type . '_page_transparent_header', 'options');
	$background =  get_field($post_type . '_choose_background', 'options');
	$title = single_post_title('',false);
elseif (is_search()):
	$header_image = get_field('search_header', 'options');
	$transparent_image = get_field('search_page_transparent_header', 'options');
	$background =  get_field('search_choose_background', 'options');
	$title = 	'<span class="underline decoration-accent-secondary decoration-4">Search results for: ' . get_search_query() . '</span>';
else:
	$background_image = get_field('background_image_layout');
	$transparent_image = get_field('transparent_image_layout');
	$background =  get_field('choose_background');
	$title = get_the_title();
endif;


if(!$background):
	$background = 'no';
endif;

?>

<header class="entry-header grid grid-cols-1 relative grid-rows-[12rem] lg:grid-rows-[20rem] has-<?php echo $background;?>-background-color has-background bg-curves bg-fixed bg-cover bg-center overflow-hidden">

<h1 class="page-title z-0 mb-6 w-11/12 lg:w-fit mx-auto lg:ml-[12.5%] col-start-1 row-start-1 place-self-end leading-snug lg:leading-normal justify-self-start bg-primary-default text-lg lg:text-gigantic px-6 font-black uppercase"><?php echo $title;?></h1>

<?php if($header_image):?>
<img class="h-80<?php print($transparent_image ? ' place-self-end p-2 ' : ' w-full ');?> col-start-1 row-start-1 object-cover" src="<?php echo $header_image['url'];?>" alt="<?php echo $header_image['alt'];?>">
<?php endif;?>

<?php if(is_singular() && has_post_thumbnail() && $background_image):
	the_post_thumbnail( 'full', ['class' => 'w-full h-80 col-start-1 row-start-1 object-cover'] );
 endif;?>

</header><!-- .page-header -->