<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package v5
 */

?>



		<ul class="large-block-grid-2 small-block-grid-1 work-grid columns small-10 small-offset-1 large-10 medium-10 medium-offset-1 large-offset-1">

				<?php query_posts('cat=2&showposts=6'); ?>
				
					<?php /* Start the Loop */ ?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );?>	

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


	<!-- #post-## -->


