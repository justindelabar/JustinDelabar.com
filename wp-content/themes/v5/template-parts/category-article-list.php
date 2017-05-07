<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package v5
 */

?>


<?php query_posts('cat=3'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php
				$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
				?>		

	<a href="<?php echo get_permalink(); ?>"><section class="row article-wrapper post<?php the_category_unlinked(' '); ?>">
		
		<figure class="columns medium-11 large-3 large-offset-1 small-10 small-offset-1 left" style="background: url(<?php echo $src[0]; ?>); background-size: cover; background-position: 50% 0%;">
		</figure>

		<article class="columns small-10 large-10 medium-offset-1 medium-10 small-offset-1">
	
			<h2><?php the_title(); ?></h2>
			<p><?php the_excerpt(); ?></p>
	
		</article>

	
	
	</section></a>


<?php endwhile; endif; ?>

	<!-- #post-## -->


