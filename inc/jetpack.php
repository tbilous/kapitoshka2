<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package kapitoshka2
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function kapitoshka2_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'kapitoshka2_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function kapitoshka2_jetpack_setup
add_action( 'after_setup_theme', 'kapitoshka2_jetpack_setup' );

function kapitoshka2_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function kapitoshka2_infinite_scroll_render