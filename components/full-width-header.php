<?php
/**
 * Full width header component
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

 // get the header object from blockhaus_header_layout()

$header = blockhaus_header_layout();

?>

<header class="entry-header grid <?php print($header->image ? '' : 'bg-grain-dots');?> grid-cols-1 relative grid-rows-[12rem] lg:grid-rows-[85vh] has-<?php echo $header->background;?>-background-color has-background overflow-hidden">

<h1 class="page-title z-50 mb-6 w-11/12 lg:w-fit mx-auto lg:ml-[12.5%] col-start-1 row-start-1 place-self-end leading-snug lg:leading-normal justify-self-start text-lg lg:text-display font-black uppercase text-neutral-dark-900 bg-neutral-light-100 px-6 blockhau-text-shadow"><?php echo $header->title;?></h1>

<?php if($header->image):?>
<img class="h-full w-full col-start-1 row-start-1 object-cover" src="<?php echo $header->image['url'];?>" alt="<?php echo $header->image;?>">
<?php endif;?>

<?php if(is_singular() && has_post_thumbnail() && $header->showImage):
	the_post_thumbnail( 'full', ['class' => 'w-full h-full col-start-1 row-start-1 object-cover mix-blend-luminosity'] );
 endif;?>

</header><!-- .page-header -->