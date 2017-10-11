<?php
/* ----------------------------------------
  -- ENQUEUE YOUR GOOGLE FONTS HERE
  -- defaults to Roboto
----------------------------------------- */
function skmframework_google_fonts() {
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' );
}
add_action( 'wp_enqueue_scripts', 'skmframework_google_fonts' );
