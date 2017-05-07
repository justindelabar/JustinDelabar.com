<?php
/**
 * Template part for displaying single posts.
 *
 * @package v5
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php
				$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
				?>


	<header class="entry-header row">
		<?php the_title( '<h1 class="entry-title columns large-7 large-offset-1">', '</h1>' ); ?>
		
		
			<div class="article-hero-mask"></div>
			<figure style="background:url(<?php echo $src[0]; ?>);" class="article-hero" >
			</figure>
			
		

	</header><!-- .entry-header -->

	<div class="social-links large-1 large-offset-1 columns">
		SOCIAL LINKS, BOIIII!
	</div>

	<div class="entry-content large-7 left large-offset-1 columns">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->
</section>
