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

$post_type_obj = get_post_type_object( $post_type );

?>

<header class="entry-header grid grid-cols-1 relative <?php print(($header->image || $header->showImage) ? '' : '');?> grid-rows-[12rem] lg:grid-rows-[85vh] overflow-hidden mt-14 lg:mt-0">

<div class="w-11/12 md:w-3/4 mx-auto h-full flex flex-col <?php print($header->position == 'left' ? 'items-end' : 'items-start');?> justify-center col-start-1 row-start-1 z-10 space-y-6">
<h1 class="page-title <?php print((($header->image && !$header->contain) || ($header->showImage && !$header->contain)) ? 'bg-white/80 px-6' : 'bg-transparent');?> leading-snug lg:leading-normal text-lg lg:text-display uppercase blockhau-text-shadow"><?php echo $header->title;?></h1>


				<?php
			if(! is_singular()):
				
				echo blockhaus_custom_form($post_type_obj->labels->name, $post_type); 

			endif;
				
			?>
			</div>
				

<?php if($header->image):?>
<img class="h-full w-full col-start-1 row-start-1 <?php print($header->contain ? 'object-contain p-6 lg:p-16' : 'object-cover');?> object-<?php print($header->position);?> <?php print($header->mono ? 'mix-blend-luminosity opacity-60' : 'mix-blend-normal');?>" src="<?php echo $header->image['url'];?>" alt="<?php echo $header->image;?>">
<?php endif;?>

<?php if(is_singular() && has_post_thumbnail() && $header->showImage):
	the_post_thumbnail( 'full', ['class' => 'w-full h-full col-start-1 ' . ($header->contain ? 'object-contain p-6 lg:p-16' : 'object-cover') . ' object-' . ($header->position) . ($header->mono ? ' mix-blend-luminosity opacity-60' : ' mix-blend-normal') . ' row-start-1'] );
 endif;?>

</header><!-- .page-header -->