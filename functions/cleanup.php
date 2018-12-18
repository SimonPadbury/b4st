<?php
/*
 * Cleanup
 */

// Less stuff in <head>

if ( ! function_exists('b4st_cleanup_head') ) {
  function b4st_cleanup_head() {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
    remove_action('wp_head', 'print_emoji_detection_script', 7);
	  remove_action('wp_print_styles', 'print_emoji_styles');
  }
}
add_action('init', 'b4st_cleanup_head');

// Show less info to users on failed login for security.
// (Will not let a valid username be known.)

if ( ! function_exists('show_less_login_info') ) {
  function show_less_login_info() {
      return "<strong>ERROR</strong>: Stop guessing!";
  }
}
add_filter( 'login_errors', 'show_less_login_info' );

// Do not generate and display WordPress version

if ( ! function_exists('b4st_remove_generator') ) {
  function b4st_remove_generator()  {
    return '';
  }
}
add_filter( 'the_generator', 'no_generator' );

// Remove Query Strings From Static Resources

if ( ! function_exists('b4st_remove_script_version') ) {
  function b4st_remove_script_version( $src ) {
    $parts = explode( '?', $src );
    return $parts[0];
  }
}
add_filter( 'script_loader_src', 'b4st_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', 'b4st_remove_script_version', 15, 1 );