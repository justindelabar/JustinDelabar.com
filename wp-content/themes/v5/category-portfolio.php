<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package v5
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main row" role="main">

			
	<ul class="large-block-grid-2 small-block-grid-1 work-grid columns small-10 small-offset-1 large-10 medium-10 medium-offset-1 large-offset-1">

				<?php query_posts('cat=2'); ?>
				<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );?>	
					<?php /* Start the Loop */ ?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content-page', get_post_format() );
						?>

			<?php endwhile; ?>

			</ul>

		</main><!-- #main -->


		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
