<?php
/**
 * Component for adding Open Graph tags to the head
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

?>
<?php 

/* If Blockhaus functionality plugin is activated, get any custom fields we need */

if(function_exists('get_field')):
 $twitterProfile = get_field('twitter_url', 'options');
 $ogImg = 'imageurl'; /// get_field('social_image', 'options');

endif;?>


<?php if(is_singular()):?>

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@<?php echo $twitterProfile;?>" />
<meta name="twitter:creator" content="@<?php echo $twitterProfile;?>" />
<meta property="og:url" content="<?php the_permalink();?>" />
<meta property="og:title" content="<?php the_title();?>" />
<meta property="og:description" content="<?php if(has_excerpt()): the_excerpt(); else: echo bloginfo('description'); endif; ?>" />
<meta property="og:image" content="<?php if(has_post_thumbnail()): the_post_thumbnail_url('full'); else: echo $ogImg; endif; ?>" />

<?php endif;?>