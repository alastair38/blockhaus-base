<?php
/**
 * Template part for displaying social media sharing buttons
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

?>

<div class="blockhaus-social-share p-6 flex items-center justify-center gap-4 bg-gray-100 rounded-md">

<p class="sr-only">Share this</p>

<ul class="flex gap-6 px-6 justify-center">
	<li>
		<a class="flex gap-1 items-center group" href="https://twitter.com/intent/tweet?url=<?php echo get_the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank" rel="noreferrer" aria-label="Share this content on Twitter"><span class="hidden md:inline-block">Twitter</span>
			<svg class="fill-current group-hover:scale-110 duration-200" width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M22.23,5.924c-0.736,0.326-1.527,0.547-2.357,0.646c0.847-0.508,1.498-1.312,1.804-2.27 c-0.793,0.47-1.671,0.812-2.606,0.996C18.324,4.498,17.257,4,16.077,4c-2.266,0-4.103,1.837-4.103,4.103 c0,0.322,0.036,0.635,0.106,0.935C8.67,8.867,5.647,7.234,3.623,4.751C3.27,5.357,3.067,6.062,3.067,6.814 c0,1.424,0.724,2.679,1.825,3.415c-0.673-0.021-1.305-0.206-1.859-0.513c0,0.017,0,0.034,0,0.052c0,1.988,1.414,3.647,3.292,4.023 c-0.344,0.094-0.707,0.144-1.081,0.144c-0.264,0-0.521-0.026-0.772-0.074c0.522,1.63,2.038,2.816,3.833,2.85 c-1.404,1.1-3.174,1.756-5.096,1.756c-0.331,0-0.658-0.019-0.979-0.057c1.816,1.164,3.973,1.843,6.29,1.843 c7.547,0,11.675-6.252,11.675-11.675c0-0.178-0.004-0.355-0.012-0.531C20.985,7.47,21.68,6.747,22.23,5.924z"></path>
			</svg>
		</a>
	</li>

	<li>
		<a class="flex gap-1 items-center group" href="https://www.facebook.com/sharer.php?u=<?php echo get_the_permalink(); ?>" target="_blank" rel="noreferrer" aria-label="Share this content on Facebook"><span class="hidden md:inline-block">Facebook</span>
			<svg class="fill-current group-hover:scale-110 duration-200" width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M12 2C6.5 2 2 6.5 2 12c0 5 3.7 9.1 8.4 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.3v7C18.3 21.1 22 17 22 12c0-5.5-4.5-10-10-10z"></path></svg>
		</a>
	</li>

	<li>
		<a class="flex gap-1 items-center group" href="mailto:?subject=I wanted to share this post with you from <?php bloginfo('name'); ?>&body=<?php the_title('','',true); ?>&#32;&#32;<?php echo get_the_permalink(); ?>" target="_blank" rel="noreferrer" aria-label="Share this content by email"><span class="hidden md:inline-block">Email</span>
			<svg class="fill-current group-hover:scale-110 duration-200" width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M20,4H4C2.895,4,2,4.895,2,6v12c0,1.105,0.895,2,2,2h16c1.105,0,2-0.895,2-2V6C22,4.895,21.105,4,20,4z M20,8.236l-8,4.882 L4,8.236V6h16V8.236z"></path></svg>
		</a> 
	</li>
</ul>

</div>
