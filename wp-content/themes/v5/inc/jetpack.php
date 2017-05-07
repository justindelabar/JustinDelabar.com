<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package v5
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function v5_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'v5_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function v5_jetpack_setup
add_action( 'after_setup_theme', 'v5_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function v5_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function v5_infinite_scroll_render
