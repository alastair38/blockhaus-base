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
$post_type = get_post_type();

$post_type_obj = get_post_type_object( $post_type);

?>

<header class="bg-neutral-light-100 p-6 gap-6 flex flex-col items-center justify-center">

<h1 class="page-title text-xl md:text-huge font-black"><?php echo $header->title;?></h1>

	<?php
		if(! is_singular() && $post_type_obj):
			
			echo blockhaus_custom_form($post_type_obj->labels->name, $post_type); 

		endif;	
	?>
			
</header><!-- .page-header -->