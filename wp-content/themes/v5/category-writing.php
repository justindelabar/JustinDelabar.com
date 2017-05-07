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

			
		<section id="article-list" class="columns large-12">

	
			<?php get_template_part( 'template-parts/category-article-list', 'none' ); ?>
	
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
