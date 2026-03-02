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
function enqueue_theme_assets() {
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
    // Swiper CSS
    wp_enqueue_style(
        'swiper-css',
        get_template_directory_uri() . '/assets/js/swiper/swiper-bundle.min.css',
        [],
        '11.0.0'
    );

    // Swiper JS
    wp_enqueue_script(
        'swiper-js',
        get_template_directory_uri() . '/assets/js/swiper/swiper-bundle.min.js',
        [],
        '11.0.0',
        true
    );
    wp_enqueue_script(
        'theme-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        ['swiper-js'], // dependencia
        '1.0.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'enqueue_theme_assets');
