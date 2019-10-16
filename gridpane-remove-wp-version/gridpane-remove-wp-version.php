<?php

remove_action('wp_head', 'wp_generator');
add_filter('the_generator', '__return_empty_string');

function the_answer() {
	global $wp_version;
	$wp_version = '42';
}
add_action('init', 'the_answer');





