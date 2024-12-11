<?php
// Theme support =============================================

// Make custom function for dynamic title
function pagbiyahe_theme_support(){
    // Add dynamic title tag
    add_theme_support('title-tag');

    // Add dynamic logo
    add_theme_support('custom-logo');

    // Add post thumbnails
    add_theme_support('post-thumbnails');
}

// Hook custom function
add_action('after_setup_theme', 'pagbiyahe_theme_support');


// css ==================================================

// Make Custom function for styles
function pasyarta_styles(){
    // Register style.css
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('pasyarta-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');

    // Register Font-Awesome
    wp_enqueue_style('pasyarta-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css");
}

// Hook Custom function
add_action('wp_enqueue_scripts', 'pasyarta_styles');


// js =====================================================

// Make Custom function for javascript
function pasyarta_scripts(){
    // Register javascript
    wp_enqueue_script('pasyarta-script', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
}

// Hook custom function
add_action('wp_enqueue_scripts', 'pasyarta_scripts');