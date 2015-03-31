<?php
define('TMP', get_bloginfo('stylesheet_directory'));
define('IMG', TMP . '/images');
define('URL', get_bloginfo('url'));

add_theme_support('nav-menus');
if (function_exists('register_nav_menus')) {
    register_nav_menus(
        array('main' => 'Main Nav')
    );
}

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => __('Primary Sidebar', 'primary-sidebar'),
        'id' => 'primary-widget-area',
        'description' => __('The primary widget area', 'dir'),
        'before_widget' => '<div class="widget">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
}


/**
 * Adds support for thumbnails
 */
add_theme_support( 'post-thumbnails' );