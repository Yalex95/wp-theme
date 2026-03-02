<?php
//theme basic setup
function power_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('menus');

     register_nav_menus(array(
        'primary'   => __('Primary Menu', 'power-and-wells'),
        'secondary' => __('Secondary Menu', 'power-and-wells'),
        'footer-servicios' => 'Footer Servicios',
    ));
}

add_action('after_setup_theme', 'power_setup');

// Enqueue tailwind classes and style.css
function enqueue_tailwind() {
    wp_enqueue_style(
        'tailwind-css',
        get_template_directory_uri().'/assets/css/output.css',
        array(),
        filemtime(get_template_directory() . '/assets/css/output.css')
    );
    wp_enqueue_style(
        'style',
        get_template_directory_uri().'/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css')
    );
}

add_action('wp_enqueue_scripts', 'enqueue_tailwind');
