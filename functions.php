<?php

// enqueue parent styles

function child_theme_enqueue_styles() {
    // Enqueue parent theme styles
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Enqueue child theme styles
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'parent-style' )
    );
}

add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );