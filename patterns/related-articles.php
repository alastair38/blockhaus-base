<?php
/**
 * Title: Featured Articles - Add the most recent post assigned the 'Featured' label
 * Slug: blockhaus/featured-articles
 * Categories: posts 
 * Description: Adds the most recent post assigned the 'Featured' label
 */
?>

<!-- wp:query {"queryId":0,"query":{"perPage":"2","pages":"2","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[],"label":[9]}},"tagName":"section","displayLayout":{"type":"list","columns":2},"layout":{"type":"default"}} -->
<section class="wp-block-query"><!-- wp:heading {"className":"col-span-full font-black underline"} -->
<h2 class="wp-block-heading col-span-full font-black underline">Featured articles</h2>
<!-- /wp:heading -->

<!-- wp:post-template {"className":"grid grid-cols-fill gap-12"} -->
<!-- wp:group {"style":{"spacing":{}},"className":"flex flex-col h-full","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group flex flex-col h-full"><!-- wp:post-featured-image {"sizeSlug":"landscape"} /-->

<!-- wp:group {"style":{"spacing":{}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-title {"className":"font-black","fontSize":"large"} /-->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:post-excerpt {"showMoreOnNewLine":false} /-->

<!-- wp:read-more {"content":"View article","className":"rounded-md text-sm inline-block w-fit bg-secondary text-white px-6 py-2 ring-2 ring-offset-2 ring-transparent hover:ring-secondary focus:ring-secondary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></section>
<!-- /wp:query -->