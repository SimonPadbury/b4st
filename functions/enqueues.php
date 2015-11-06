<?php

function b4st_enqueues() {

	wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js', false, '2.1.4', true);
	wp_enqueue_script('jquery');

	wp_register_style('bootstrap-css', get_template_directory_uri() . '/dist/css/bootstrap.min.css', false, '4.0.0.alpha', null);
	wp_enqueue_style('bootstrap-css');

	wp_register_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css', false, '4.4.0', null);
	wp_enqueue_style('font-awesome-css');

  	wp_register_style('b4st-css', get_template_directory_uri() . '/theme/css/b4st.css', false, null);
	wp_enqueue_style('b4st-css');

  	wp_register_script('modernizr', get_template_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, null, true);
	wp_enqueue_script('modernizr');

  	wp_register_script('bootstrap-js', get_template_directory_uri() . '/dist/js/bootstrap.min.js', false, null, true);
	wp_enqueue_script('bootstrap-js');

	wp_register_script('b4st-js', get_template_directory_uri() . '/theme/js/b4st.js', false, null, true);
	wp_enqueue_script('b4st-js');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'b4st_enqueues', 100);
