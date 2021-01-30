<?php
    add_action( 'wp_enqueue_scripts', 'tf_styles' );
    add_action( 'wp_enqueue_scripts', 'tf_scripts' );
    
    function tf_styles() {
        wp_enqueue_style( 'tf_style', get_stylesheet_uri() );
        wp_enqueue_style( 'tf_style-main', get_stylesheet_directory_uri() . '/assets/styles/main.min.css' );
    };
    function tf_scripts() {
        wp_enqueue_script( 'tf_scripts', get_template_directory_uri() . '/assets/js/script.js', array(), true );
    };

    add_theme_support( 'custom-logo' );
?>