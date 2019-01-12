<?php
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles() {

	$parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

	// wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
	wp_enqueue_style('child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array($parent_style),
		wp_get_theme()->get('Version')
	);
}
// disable for posts
add_filter('use_block_editor_for_post', '__return_false', 10);

// disable for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);
// Get Post by name

function get_post_by_name($post_name) {

	if ($posts = get_posts(array(
		'name' => $post_name,
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 1,
	))) {
		$found_post = $posts[0];
	}
	return $found_post;

}

// END Get Post by name

// Global Functinos

$images_folder = get_stylesheet_directory_uri() . '/assets/img/';
$js_folder = get_stylesheet_directory_uri() . '/assets/js/';
$css_folder = get_stylesheet_directory_uri() . '/assets/css/';
$font_folder = get_stylesheet_directory_uri() . '/assets/css/fonts/';
$template_parts = get_stylesheet_directory_uri() . '/template-parts/';
$template_parts_dir = '/template-parts/';

// END Global Functinos

// Unhooking parents styles
// function unhook_parent_style() {

// 	wp_dequeue_style('twentysixteen-style');
// 	wp_deregister_style('twentysixteen-style');

// }
// add_action('wp_enqueue_scripts', 'unhook_parent_style', 20);
// END Unhooking parents styles

?>

