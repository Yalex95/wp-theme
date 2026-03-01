<?php

function power_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menus([
        'primary' => __('Primary Menu', 'power-and-wells')
    ]);
}

add_action('after_setup_theme', 'power_setup');



function enqueue_tailwind() {
    wp_enqueue_style(
        'tailwind-css',
        get_template_directory_uri().'/assets/css/output.css',
        array(),
        filemtime(get_template_directory() . '/assets/css/output.css')
    );
}

add_action('wp_enqueue_scripts', 'enqueue_tailwind');