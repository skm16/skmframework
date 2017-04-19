<!DOCTYPE html>
<html <?php language_attributes(); ?>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if (has_site_icon()): ?>
     <link rel="icon" type="image/x-icon" href="<?php echo site_icon_url(); ?>" />
    <?php endif; ?>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- begin masthead -->
  <div id="masthead">
   <div class="container-fluid">
    <div class="row">
     <div class="col-xs-6 col-md-3">
      <?php
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      if ( has_custom_logo() ):
       echo '<img src="'. esc_url( $logo[0] ) .'" class="img-responsive">';
      else:
       echo '<h2 class="logo"><a href="'.home_url().'" title="'.get_bloginfo('name').'">'.get_bloginfo('name').'</a></h2>';
       if(!EMPTY(get_bloginfo('description'))):
        echo '<p>'.get_bloginfo('description').'</p>';
       endif;
      endif; ?>
     </div>
     <div class="col-xs-6 col-md-9">
      <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_class' => 'hidden-sm hidden-xs')); ?>
     </div>
    </div>
   </div>
   <div id="mobile-nav-toggle-wrapper" class="hidden-md hidden-lg">
    <button class="c-hamburger c-hamburger--htx">
     <span>toggle menu</span>
    </button>
   </div>
  </div>
  <!-- end masthead -->

  <main>
