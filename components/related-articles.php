<?php

/**
 * Template part for displaying related posts by category
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

$post_categories = wp_get_post_categories( $post->ID, array( 'fields' => 'ids' ) );


$args = array(
  'category'   => $post_categories,
	'post__not_in'   => array($post->ID),
	'numberposts' => 3,
);

$related_articles = get_posts($args);

if($related_articles):
?>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 py-12">
	<h2 class="col-span-full text-base md:text-lg font-black">Related Articles</h2>
<?php foreach($related_articles as $article) {?>
<article class="bg-neutral-light-100">
	<div class="p-6 space-y-6">
      <h3 class="font-black"><?php echo get_the_title($article->ID);?></h3>
        <hr >
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus, veritatis nam! Inventore minus.</p>
      <a aria-label="<?php echo get_the_title($article->ID);?>" class="rounded-md text-sm inline-block w-fit bg-secondary text-white px-6 py-2 ring-2 ring-offset-2 ring-transparent hover:ring-secondary focus:ring-secondary" href="<?php echo esc_url(get_the_permalink($article->ID));?>">View article</a>
       
      </div>
			<?php if(has_post_thumbnail($article->ID)):
				$img = get_the_post_thumbnail( $article->ID, 'landscape', ['class' => 'w-full mt-auto object-cover'] );
				echo $img;
 			endif;?>
	</article>
<?php }?>
</div>

<?php endif;?>