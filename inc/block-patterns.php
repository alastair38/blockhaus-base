<?php

function blockhaus_register_patterns() {

  register_block_pattern(
      'blockhaus/post-header-featured',
      array(
          'title'       => __( 'Hero Heading', 'blockhaus' ),
          'content'     => '<!-- wp:group {"tagName":"section","layout":{"inherit":true}} -->
          <section id="blockhaus-hero" class="wp-block-group"><!-- wp:group {"className":"flex flex-col md:flex-row py-20 w-full lg:w-3/4 mx-auto"} -->
          <div class="wp-block-group flex flex-col md:flex-row py-20 w-full lg:w-3/4 mx-auto"><!-- wp:image {"id":381,"sizeSlug":"landscape","linkDestination":"none","className":"aspect-video rounded-md has-highlight-background-color has-background p-2 -rotate-2 z-0 image"} -->
          <figure class="wp-block-image size-landscape aspect-video rounded-md has-highlight-background-color has-background p-2 -rotate-2 z-0 image"><img src="/wp-content/themes/blockhaus/assets/images/block-patterns/hero-header.jpg" alt="" class="wp-image-381"/></figure>
          <!-- /wp:image -->
          
          <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"bg-offset space-y-2 lg:space-y-6 p-6 md:-ml-12 self-center z-10","layout":{"inherit":false}} -->
          <div class="wp-block-group bg-offset space-y-2 lg:space-y-6 p-6 md:-ml-12 self-center z-10"><!-- wp:heading {"level":1,"className":"font-black leading-6 md:leading-10","fontSize":"gigantic"} -->
          <h1 class="font-black leading-6 md:leading-10 has-gigantic-font-size">Discover NeurOx YPAG</h1>
          <!-- /wp:heading -->
          
          <!-- wp:paragraph {"className":"paragraph"} -->
          <p class="paragraph">Start your research journey here</p>
          <!-- /wp:paragraph --></div>
          <!-- /wp:group --></div>
          <!-- /wp:group --></section>
          <!-- /wp:group -->',
      )
  ); 

  register_block_pattern(
    'blockhaus/header-hero',
    array(
        'title'       => __( 'Hero Header', 'blockhaus' ),
        'content'     => '<!-- wp:group {"tagName":"section","className":"grid grid-cols-1 md:grid-cols-hero place-items-center w-4/5 py-20 mx-auto","layout":{"inherit":true}} -->
        <section class="wp-block-group grid grid-cols-1 md:grid-cols-hero place-items-center w-4/5 py-20 mx-auto"><!-- wp:image {"id":578,"sizeSlug":"landscape","linkDestination":"none","className":"md:col-span-2 md:col-start-1 md:row-start-1 size-landscape aspect-video rounded-md has-highlight-background-color has-background p-2 -rotate-2 z-0 image"} -->
        <figure class="wp-block-image md:col-span-2 md:col-start-1 md:row-start-1 size-landscape aspect-video rounded-md has-highlight-background-color has-background p-2 -rotate-2 z-0 image"><img src="/wp-content/themes/blockhaus/assets/images/block-patterns/hero-header.jpg" alt="A woman sits in a doorway looking at her laptop" class="wp-image-578"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"bg-offset md:col-span-2 md:col-start-2 md:row-start-1 space-y-2 lg:space-y-6 p-6 self-center z-10","layout":{"inherit":false}} -->
        <div class="wp-block-group bg-offset md:col-span-2 md:col-start-2 md:row-start-1 space-y-2 lg:space-y-6 p-6 self-center z-10"><!-- wp:heading {"level":1,"className":"heading font-black leading-10","fontSize":"gigantic"} -->
        <h1 class="heading font-black leading-10 has-gigantic-font-size">Discover NeurOx YPAG</h1>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"className":"paragraph"} -->
        <p class="paragraph">Start your research journey here</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></section>
        <!-- /wp:group -->',
    )
);

  register_block_pattern(
     'blockhaus/profile-block',
     array(
         'title'       => __( 'Profile Block - Image Left', 'blockhaus' ),
         'content'     => '<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"blockhaus-profile flex-col md:flex-row flex gap-0 md:gap-12"} -->
         <div class="wp-block-group blockhaus-profile flex-col md:flex-row flex gap-0 md:gap-12"><!-- wp:image {"id":458,"width":300,"height":300,"sizeSlug":"profile","linkDestination":"none","className":"aspect-square"} -->
         <figure class="wp-block-image size-profile is-resized aspect-square"><img src="/wp-content/themes/blockhaus/assets/images/block-patterns/profile-image.jpg" alt="A close up of a young Asian man against a grey background" class="wp-image-458" width="300" height="300"/></figure>
         <!-- /wp:image -->
         
         <!-- wp:group {"className":"self-start md:self-center mt-0 md:mt-auto py-6 md:p-0 space-y-6"} -->
         <div class="wp-block-group self-start md:self-center mt-0 md:mt-auto py-6 md:p-0 space-y-6"><!-- wp:heading {"className":"font-bold"} -->
         <h2 class="font-bold">Name here</h2>
         <!-- /wp:heading -->
         
         <!-- wp:paragraph -->
         <p>Profile information here</p>
         <!-- /wp:paragraph -->
         
         <!-- wp:buttons -->
         <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-retro shadow-retro bg-offset"} -->
         <div class="wp-block-button is-style-button-retro shadow-retro bg-offset"><a class="wp-block-button__link">View Profile</a></div>
         <!-- /wp:button --></div>
         <!-- /wp:buttons --></div>
         <!-- /wp:group --></div>
         <!-- /wp:group -->',
     )
 ); 

 register_block_pattern(
  'blockhaus/profile-block-alternate',
  array(
      'title'       => __( 'Profile Block - Image Right', 'blockhaus' ),
      'content'     => '<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"blockhaus-profile-alt flex-col-reverse justify-between md:flex-row flex gap-0 md:gap-12"} -->
      <div class="wp-block-group blockhaus-profile-alt flex-col-reverse justify-between md:flex-row flex gap-0 md:gap-12"><!-- wp:group {"className":"self-start md:self-center mt-0 md:mt-auto py-6 md:p-0 space-y-6"} -->
      <div class="wp-block-group self-start md:self-center mt-0 md:mt-auto py-6 md:p-0 space-y-6"><!-- wp:heading {"className":"font-bold"} -->
      <h2 class="font-bold">Name here</h2>
      <!-- /wp:heading -->
      
      <!-- wp:paragraph -->
      <p>Profile information here</p>
      <!-- /wp:paragraph -->
      
      <!-- wp:buttons -->
      <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-retro shadow-retro bg-offset"} -->
      <div class="wp-block-button is-style-button-retro shadow-retro bg-offset"><a class="wp-block-button__link">View Profile</a></div>
      <!-- /wp:button --></div>
      <!-- /wp:buttons --></div>
      <!-- /wp:group -->
      
      <!-- wp:image {"id":458,"width":300,"height":300,"sizeSlug":"profile","linkDestination":"none","className":"aspect-square"} -->
      <figure class="wp-block-image size-profile is-resized aspect-square"><img src="/wp-content/themes/blockhaus/assets/images/block-patterns/profile-image.jpg" alt="A close up of a young Asian man against a grey background" class="wp-image-458" width="300" height="300"/></figure>
      <!-- /wp:image --></div>
      <!-- /wp:group -->',
  )
); 

 register_block_pattern(
  'blockhaus/cta-with-video',
  array(
      'title'       => __( 'Call to Action - with video', 'blockhaus' ),
      'content'     => '
      <!-- wp:group {"tagName":"section","className":"py-20 has-accent-background-color has-background slanted z-0 relative overflow-hidden"} -->
      <section class="wp-block-group py-20 has-accent-background-color has-background slanted z-0 relative overflow-hidden"><!-- wp:heading {"textAlign":"center","fontSize":"huge"} -->
      <h2 class="has-text-align-center has-huge-font-size">What is YPAG?</h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"align":"center"} -->
      <p class="has-text-align-center">A brief description of the project</p>
      <!-- /wp:paragraph -->

      <!-- wp:buttons {"className":"justify-center"} -->
      <div class="wp-block-buttons justify-center"><!-- wp:button {"className":"w-fit mx-auto bg-primary-default is-style-button-retro"} -->
      <div class="wp-block-button w-fit mx-auto bg-primary-default is-style-button-retro"><a class="wp-block-button__link">Find out more</a></div>
      <!-- /wp:button --></div>
      <!-- /wp:buttons -->

      <!-- wp:embed {"url":"https://www.youtube.com/watch?v=_hqI2HEuKHM","type":"video","providerNameSlug":"youtube","responsive":true,"className":"rounded-md flex flex-col items-center max-w-full mx-auto pt-8 wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
      <figure class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube rounded-md flex flex-col items-center max-w-full mx-auto pt-8 wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
      https://www.youtube.com/watch?v=_hqI2HEuKHM
      </div><figcaption>Video caption here</figcaption></figure>
      <!-- /wp:embed --></section>
      <!-- /wp:group -->
      ',
  )
); 

register_block_pattern(
  'blockhaus/latest-posts',
  array(
    'title'   => __('Latest posts', 'blockhaus'),
    'content' => '
      <!-- wp:group {"tagName":"section", "className":"py-28 has-accent-background-color has-background slanted z-0 relative overflow-hidden","layout":{"inherit":true}} -->
      <section class="wp-block-group py-28 has-accent-background-color has-background slanted z-0 relative overflow-hidden"><!-- wp:heading {"fontSize":"gigantic"} -->
      <h2 class="has-gigantic-font-size font-black">Blog</h2>
      <!-- /wp:heading -->

      <!-- wp:query {"queryId":17,"query":{"perPage":"4","pages":"1","offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"},"layout":{"inherit":true}} -->
      <div class="wp-block-query"><!-- wp:post-template {"className":"grid grid-cols-1 md:grid-cols-2 gap-8 post-template-grid"} -->
      <!-- wp:post-featured-image {"width":""} /-->

      <!-- wp:post-title {"level":3,"isLink":true, "className":"font-bold has-large-font-size bg-offset p-0 absolute bottom-2 right-2"} /-->
      <!-- /wp:post-template --></div>
      <!-- /wp:query --></section>
      <!-- /wp:group -->
    ',
  )
  );
  register_block_pattern(
    'blockhaus/blockhaus-gallery',
    array(
      'title'   => __('Blockhaus Gallery', 'blockhaus'),
      'content' => '
      <!-- wp:group {"tagName":"aside","style":{"spacing":{"blockGap":"0px"}},"className":"blockhaus-gallery has-accent-background-color has-background p-6 rounded-md space-y-6"} -->
      <aside id="stories-gallery" class="wp-block-group blockhaus-gallery has-accent-background-color has-background p-6 rounded-md space-y-6"><!-- wp:paragraph -->
      <p>Some description here</p>
      <!-- /wp:paragraph -->

      <!-- wp:gallery {"linkTo":"none"} -->
      <figure class="wp-block-gallery has-nested-images columns-default is-cropped bg-inherit"><!-- wp:image {"id":578,"sizeSlug":"medium","linkDestination":"none"} -->
      <figure class="wp-block-image size-medium bg-inherit"><img src="http://pentecost.local/wp-content/uploads/2022/05/surface-ddcLX7Iis44-unsplash-3.jpg" alt="" class="wp-image-578"/></figure>
      <!-- /wp:image -->

      <!-- wp:image {"id":486,"sizeSlug":"medium","linkDestination":"none"} -->
      <figure class="wp-block-image size-medium bg-inherit"><img src="http://pentecost.local/wp-content/uploads/2022/05/imansyah-muhamad-putera-n4KewLKFOZw-unsplash-1.jpg" alt="" class="wp-image-486"/></figure>
      <!-- /wp:image -->

      <!-- wp:image {"id":483,"sizeSlug":"medium","linkDestination":"none"} -->
      <figure class="wp-block-image size-medium bg-inherit"><img src="http://pentecost.local/wp-content/uploads/2022/05/disruptivo-DokE5D4GbDk-unsplash-1.jpg" alt="" class="wp-image-483"/></figure>
      <!-- /wp:image -->

      <!-- wp:image {"id":437,"sizeSlug":"medium","linkDestination":"none"} -->
      <figure class="wp-block-image size-medium bg-inherit"><img src="http://pentecost.local/wp-content/uploads/2022/05/pil.jpg" alt="" class="wp-image-437"/></figure>
      <!-- /wp:image -->

      <!-- wp:image {"id":435,"sizeSlug":"medium","linkDestination":"none"} -->
      <figure class="wp-block-image size-medium bg-inherit"><img src="http://pentecost.local/wp-content/uploads/2022/05/clark-van-der-beken-xFdrt8YIoJc-unsplash.jpg" alt="" class="wp-image-435"/><figcaption>A final final caption</figcaption></figure>
      <!-- /wp:image --></figure>
      <!-- /wp:gallery --></aside>
      <!-- /wp:group -->
      ',
    )
    );

  register_block_pattern(
    'blockhaus/team-gallery',
    array(
      'title'   => __('Team Gallery', 'blockhaus'),
      'content' => '
      <!-- wp:group {"tagName":"section","style":{"spacing":{"blockGap":"0px"}},"className":"grid grid-cols-3 gap-6 mt-6","layout":{"inherit":true}} -->
      <section class="wp-block-group grid grid-cols-3 gap-6 mt-6"><!-- wp:group {"className":"flex flex-col bg-offset justify-center p-6"} -->
      <div class="wp-block-group flex flex-col bg-offset justify-center p-6"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"extra-large"} -->
      <h2 class="has-extra-large-font-size" style="font-style:normal;font-weight:700">Meet the team</h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph -->
      <p>Find out about the people who make us work</p>
      <!-- /wp:paragraph --></div>
      <!-- /wp:group -->

      <!-- wp:image {"id":486,"sizeSlug":"profile","linkDestination":"none"} -->
      <figure class="wp-block-image size-profile"><img src="http://pentecost.local/wp-content/uploads/2022/05/imansyah-muhamad-putera-n4KewLKFOZw-unsplash-1-300x300.jpg" alt="" class="wp-image-486"/><figcaption>Jimmy Quinn</figcaption></figure>
      <!-- /wp:image -->

      <!-- wp:image {"id":483,"sizeSlug":"profile","linkDestination":"none"} -->
      <figure class="wp-block-image size-profile"><img src="http://pentecost.local/wp-content/uploads/2022/05/disruptivo-DokE5D4GbDk-unsplash-1-300x300.jpg" alt="" class="wp-image-483"/><figcaption>Lana Da Silva</figcaption></figure>
      <!-- /wp:image -->

      <!-- wp:image {"id":458,"sizeSlug":"profile","linkDestination":"none"} -->
      <figure class="wp-block-image size-profile"><img src="http://pentecost.local/wp-content/uploads/2022/05/janko-ferlic-1nizzZ-SFw4-unsplash-3-300x300.jpg" alt="" class="wp-image-458"/><figcaption>Jessie Anderson</figcaption></figure>
      <!-- /wp:image -->

      <!-- wp:image {"id":578,"sizeSlug":"profile","linkDestination":"none"} -->
      <figure class="wp-block-image size-profile"><img src="http://pentecost.local/wp-content/uploads/2022/05/surface-ddcLX7Iis44-unsplash-3-300x300.jpg" alt="" class="wp-image-578"/><figcaption><a href="http://pentecost.local/about/" data-type="page" data-id="6">Andrea Ireland</a></figcaption></figure>
      <!-- /wp:image --></section>
      <!-- /wp:group -->
      ',
    )
    );

    register_block_pattern(
      'blockhaus/blockhaus-quote',
      array(
        'title'   => __('Blockhaus Quote', 'blockhaus'),
        'content' => '
        <!-- wp:quote {"className":"blockhaus-quote bg-offset font-bold flex flex-col gap-6 p-16 rounded-md is-style-default","fontSize":"large"} -->
        <blockquote class="wp-block-quote blockhaus-quote bg-offset font-bold flex flex-col gap-6 p-16 rounded-md is-style-default has-large-font-size"><p>The cure for boredom is curiosity. There is no cure for curiosity.</p><cite>Dorothy Parker</cite></blockquote>
        <!-- /wp:quote -->
        ',
      )
      );

      register_block_pattern(
        'blockhaus/blockhaus-quote-with-image',
        array(
          'title'   => __('Blockhaus Quote with Image', 'blockhaus'),
          'content' => '
          <!-- wp:group {"className":"blockhaus-quote-image bg-gray-100 rounded-md flex flex-col items-center p-6 justify-center"} -->
          <div class="wp-block-group blockhaus-quote-image bg-gray-100 rounded-md flex flex-col items-center p-6 justify-center"><!-- wp:image {"id":458,"width":150,"height":150,"sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-default rounded-full aspect-square"} -->
          <figure class="wp-block-image size-thumbnail is-resized is-style-default rounded-full aspect-square"><img src="/wp-content/themes/blockhaus/assets/images/block-patterns/quote-with-image.jpg" alt="Dorothy Parker as a young woman" class="wp-image-458" width="150" height="150"/></figure>
          <!-- /wp:image -->

          <!-- wp:quote {"className":"flex flex-col items-center gap-2 is-style-plain"} -->
          <blockquote class="wp-block-quote flex flex-col items-center gap-2 is-style-plain"><p>The cure for boredom is curiosity. There is no cure for curiosity.</p><cite>Dorothy Parker</cite></blockquote>
          <!-- /wp:quote --></div>
          <!-- /wp:group -->
          ',
        )
        );

    register_block_pattern(
      'blockhaus/instagram',
      array(
        'title'   => __('Instagram', 'blockhaus'),
        'content' => '
        <!-- wp:group {"tagName":"section","style":{"spacing":{"blockGap":"0px"}},"className":"flex gap-8 items-center justify-center p-6 w-fit mx-auto"} -->
        <section class="wp-block-group flex gap-8 items-center justify-center p-6 w-fit mx-auto"><!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center font-bold">Follow us on Instagram</p>
        <!-- /wp:paragraph -->

        <!-- wp:social-links {"size":"has-huge-icon-size","align":"center","className":"is-style-logos-only","layout":{"type":"flex","orientation":"horizontal","justifyContent":"left"}} -->
        <ul class="wp-block-social-links aligncenter has-huge-icon-size is-style-logos-only"><!-- wp:social-link {"url":"https://instagram.com/yourusername","service":"instagram","label":"Visit our Instagram"} /--></ul>
        <!-- /wp:social-links --></section>
        <!-- /wp:group -->
        ',
      )
      );

      register_block_pattern(
        'blockhaus/search',
        array(
          'title'   => __('Search', 'blockhaus'),
          'content' => '
          <!-- wp:search {"label":"Search for content","placeholder":"Enter search term ...","width":null,"widthUnit":"px","buttonText":"Submit","backgroundColor":"accent","textColor":"secondary","className":"flex items-center gap-4 mt-2 blockhaus-search"} /-->
          ',
        )
        );
}
add_action( 'init', 'blockhaus_register_patterns' );