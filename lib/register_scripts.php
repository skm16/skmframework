<?php
/**
 * Enqueue scripts and styles. Add as needed.
 */
function skmframework_scripts() {
    wp_enqueue_style( 'app-min-css', get_template_directory_uri() . '/assets/css/dist/app.min.css' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/scripts/jquery/jquery.min.js', array(), '3.1.1', true );
    wp_enqueue_script( 'bootstrap-min-js', get_template_directory_uri() . '/assets/scripts/bootstrap-sass/bootstrap.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'main-theme-min-js', get_template_directory_uri() . '/assets/scripts/dist/main.min.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'skmframework_scripts' );
