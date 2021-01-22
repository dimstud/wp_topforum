<?php
    add_action( 'wp_enqueue_scripts', 'tf_scripts' );
    
    function tf_scripts() {
        wp_enqueue_style( 'tf_style', get_stylesheet_uri() );
        wp_enqueue_style( 'tf_style-main', get_stylesheet_directory_uri() . '/assets/styles/main.min.css' );
    };
?>