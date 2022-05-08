<?php

function my_theme_support() {
    // add dynamically title to the page
    add_theme_support('title-tag');
}

function my_register_styles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style("my-custom-css", get_stylesheet_uri(), array('my-bootstrap'), $version, 'all');
    wp_enqueue_style("my-bootstrap", 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all');
    wp_enqueue_style("my-fontawesome", 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all');
}


function my_register_scripts() {
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    wp_enqueue_script( 'my-js', get_template_directory_uri() . '/assets/js/main.js', array(), '4.4.1', true);
}

add_action('after_setup_theme', 'my_theme_support');
add_action('wp_enqueue_scripts', 'my_register_styles');
add_action('wp_enqueue_scripts', 'my_register_scripts'); 

?>