<?php
/**
 * The template for displaying all single posts.
 *
 * @package v5
 */

get_header(); ?>


	<div id="primary" class="content-area clearfix">
		<main id="main" class="site-main" role="main">


		

			<div id="intro" class="columns small-11 medium-7 medium-offset-1 large-8 large-offset-1">

			<?php the_title( '<h1 class="entry-title columns large-7">', '</h1>' ); ?>
			<h2>I am a designer and writer. Check out my portfolio or read my thoughts on design management, design for good, and more.</h2>

			</div>

	

		<?php while ( have_posts() ) : the_post(); ?>


			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="entry-content large-10 left large-offset-1 columns">
					<?php the_content(); ?>
				</div><!-- .entry-content -->

		
		 </article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
