<?php
add_theme_support('post-thumbnails');

add_theme_support('menus');


function register_theme_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu')
        )
    );
}

add_action( 'init', 'register_theme_menus');

function wpt_theme_styles() {
    wp_enqueue_style( 'style_css', get_template_directory_uri() . '/assets/css/main.css' );
}

add_action( 'wp_enqueue_scripts', 'wpt_theme_styles');

function wpt_theme_js() {
    wp_enqueue_script( 'main_js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true);
}

add_action( 'wp_enqueue_scripts', 'wpt_theme_js');


function include_jQuery() {
    if (!is_admin()) {
        wp_enqueue_script('jquery');
    }
}
add_action('wp_enqueue_scripts', 'include_jQuery');




?>