<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package v5
 */

get_header(); ?>


	<div id="primary" class="content-area" style="position:relative; z-index: 99;">

		<figure id="headshot">

			<img src="/wp-content/themes/v5/img/me2.png">

		</figure>

		<div id="intro-wrapper" class="row clearfix">

			<div id="intro" class="columns small-11 medium-7 medium-offset-1 large-8 large-offset-1">

			<h1>Hi. I'm Justin.</h1>
			<h2>I am a designer and writer. Check out my portfolio or read my thoughts on design management, design for good, and more.</h2>

			</div>

	  	</div>

		<main id="main" class="site-main row clearfix" role="main">

			<ul class="large-block-grid-2 small-block-grid-1 work-grid columns small-10 small-offset-1 large-10 medium-10 medium-offset-1 large-offset-1">

				<?php query_posts('cat=2&showposts=6'); ?>
				
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

		<section id="article-list" class="row">

	
			<?php get_template_part( 'template-parts/content-article-list', 'none' ); ?>
	
		</section>
	

	


<?php get_footer(); ?>
