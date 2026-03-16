<?php
/**
 * CTIKS Child Theme functions and definitions
 */

function ctiks_enqueue_styles() {
    // Load the Parent Theme Styles
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ) );
}
add_action( 'wp_enqueue_scripts', 'ctiks_enqueue_styles' );
