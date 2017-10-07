<?php
/**
 * Enqueue scripts and styles. Add as needed.
 */
function skmframework_scripts() {
    wp_enqueue_style( 'app-min-css', get_template_directory_uri() . '/assets/public/css/app.min.css' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/vendor/jquery/jquery.min.js', array(), '3.1.1', true );;
    wp_enqueue_script( 'main-theme-min-js', get_template_directory_uri() . '/assets/public/js/compiled.min.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'skmframework_scripts' );
