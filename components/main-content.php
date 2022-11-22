<?php
/**
 * Template part for displaying main content area
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

$social_sharing = get_field('sharing_enabled');

?>

<div class="space-y-6 p-6 w-11/12 md:w-3/4 bg-primary-default rounded-md mx-auto overflow-hidden">
		<?php

		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blockhaus' ),
				'after'  => '</div>',
			)
		);
		?>
	
    <?php if(is_singular('post')):?>

    <div class="entry-meta italic">
      <?php
      blockhaus_posted_on();
      blockhaus_posted_by();
      ?>
    </div><!-- .entry-meta -->
    
    <?php endif;?>
    
    <?php

      if($social_sharing):
      get_template_part( 'components/share-buttons' );

    endif;?>

</div><!-- .entry-content -->