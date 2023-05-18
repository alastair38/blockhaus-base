<?php 

/**
 * Template part for displaying post meta
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */


if(is_singular('post')):
  
  $social_sharing = get_field('sharing_enabled');
  
?>

  <div class="flex flex-col" >
    <?php
    blockhaus_posted_by();
    blockhaus_posted_on();
    ?>
  </div><!-- .entry-meta -->

  <?php endif;

  if($social_sharing):?>
        
  <hr class="border-secondary hidden md:block">

  <?php get_template_part( 'components/share-buttons' );

endif;?>