<?php
/* ----------------------------------------
  -- ENQUEUE YOUR GOOGLE FONTS HERE
  -- defaults to Roboto
----------------------------------------- */
function skmframework_google_fonts() {
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i' );
}
add_action( 'wp_enqueue_scripts', 'skmframework_google_fonts' );
