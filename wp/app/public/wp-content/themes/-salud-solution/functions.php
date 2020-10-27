<?php
function fanly_remove_block_library_css(){
	wp_dequeue_style('wp-block-library');
}
add_action('wp_enqueue_scripts','fanly_remove_block_library_css',100);

function my_deregister_scripts(){
 wp_dequeue_script('wp-embed');
}
add_action('wp_footer','my_deregister_scripts');

function disable_wp_head_items(){
	remove_action('wp_head','rsd_link');
	remove_action('wp_head','wlwmanifest_link');
	remove_action('wp_head','wp_generator');
	remove_action('wp_head','wp_shortlink_wp_head');
	remove_action('wp_head','feed_links',2);
	remove_action('wp_head','feed_links_extra',3);
	remove_action('wp_head','rest_output_link_wp_head');
	remove_action('wp_head','wp_resource_hints',2);
	remove_action('admin_print_styles','print_emoji_styles');
	remove_action('wp_head','print_emoji_detection_script',7);
	remove_action('admin_print_scripts','print_emoji_detection_script');
	remove_action('wp_print_styles','print_emoji_styles');
	remove_filter('wp_mail','wp_staticize_emoji_for_email');
	remove_filter('the_content_feed','wp_staticize_emoji');
	remove_filter('comment_text_rss','wp_staticize_emoji');
}
add_action('init','disable_wp_head_items');

function website_setup(){
	add_theme_support('title-tag');
}
add_action('after_setup_theme','website_setup');

function website_link(){
	wp_enqueue_style('website-style',get_stylesheet_uri());
	
	wp_enqueue_script('jqueryjs',get_stylesheet_directory_uri().'/js/jquery.js');
	wp_enqueue_script('website-function',get_stylesheet_directory_uri().'/js/function.js');
}
add_action('wp_enqueue_scripts','website_link');
add_theme_support('post-thumbnails',array('post','page','custom-post-type-name',));

function wpxzt_setup(){
    register_nav_menus([
        'header_nav' => __('ヘッダーサイドナビー'),
        'footer_nav' => __('フッターサイドナビー'),
    ]);
}
add_action('after_setup_theme','wpxzt_setup');
