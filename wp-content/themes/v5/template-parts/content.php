<?php
/**
 * Template part for displaying posts.
 *
 * @package v5
 */

?>

		
	<a href="<?php echo get_permalink(); ?>"><section class="row article-wrapper post<?php the_category_unlinked(' '); ?>">

		<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );?>		
		
		<figure class="columns medium-11 large-3 large-offset-1 left" style="background: url(<?php echo $src[0]; ?>); background-size: cover; background-position: 50% 0%;">
		</figure>

		<article class="columns small-12 large-6 medium-offset-1 medium-10">
	
			<h2><?php the_title(); ?></h2>
			<p><?php the_excerpt(); ?></p>
	
		</article>

	
	
	</section></a>