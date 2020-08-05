<?php
/*
 * Enqueues
 */

if ( ! function_exists('b4st_enqueues') ) {
	function b4st_enqueues() {

		// Styles

		wp_register_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css', false, '4.5.1', null);
		wp_enqueue_style('bootstrap4');

		wp_register_style('fontawesome5', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css', false, '5.14.0', null);
		wp_enqueue_style('fontawesome5');

		wp_enqueue_style( 'gutenberg-blocks', get_template_directory_uri() . '/theme/css/blocks.css' );

		wp_register_style('theme', get_template_directory_uri() . '/theme/css/b4st.css', false, null);
		wp_enqueue_style('theme');

		// Scripts

		wp_register_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, '2.8.3', true);
		wp_enqueue_script('modernizr');

		wp_register_script('jquery-3.5.1', 'https://code.jquery.com/jquery-3.5.1.js', false, '3.5.1', true);
		wp_enqueue_script('jquery-3.5.1');

		wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', false, '1.16.1', true);
		wp_enqueue_script('popper');

		wp_register_script('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js', false, '4.5.1', true);
		wp_enqueue_script('bootstrap4');

		wp_register_script('theme', get_template_directory_uri() . '/theme/js/b4st.js', false, null, true);
		wp_enqueue_script('theme');

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
}
add_action('wp_enqueue_scripts', 'b4st_enqueues', 100);