<?php
if(is_home() || is_archive()) :
 if ( is_active_sidebar( 'archive-sidebar' ) ) :
  echo '<aside class="sidebar archive-sidebar col-md-3">';
   dynamic_sidebar('archive-sidebar');
  echo '</aside>';
 endif;
elseif(is_single()):
 if ( is_active_sidebar( 'post-sidebar' ) ) :
  echo '<aside class="sidebar post-sidebar col-md-3">';
   dynamic_sidebar('post-sidebar');
  echo '</aside>';
 endif;
 elseif(is_page()):
  if ( is_active_sidebar( 'page-sidebar' ) ) :
   echo '<aside class="sidebar page-sidebar col-md-3">';
    dynamic_sidebar('page-sidebar');
   echo '</aside>';
  endif;
endif;
