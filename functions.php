<?php
if (!function_exists('twentytwentyfour_child_theme_setup')) {

    function twentytwentyfour_child_theme_setup()
    {
        wp_enqueue_style('twentytwentyfour', get_template_directory_uri() . '/style.css');
        wp_enqueue_style('twentytwentyfour-child-style', get_stylesheet_directory_uri() . '/style.css?v=' . time());

    }

    add_action('wp_enqueue_scripts', 'twentytwentyfour_child_theme_setup');

}