<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package get_lucky
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function get_lucky_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'get_lucky_jetpack_setup' );
