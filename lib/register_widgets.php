<?php
add_action( 'widgets_init', 'skmframework_register_widget_areas' );
function skmframework_register_widget_areas() {
    $widget_areas = array(
      array(
        'name' => 'Archive Sidebar',
        'id' => 'archive-sidebar',
        'description' => 'Widgets shown in the archive sidebar if the archive sidebar is active.',
      ),
      array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'description' => 'Widgets shown in the archive sidebar if the page sidebar is active.',
      ),
      array(
        'name' => 'Post',
        'id' => 'post-sidebar',
        'description' => 'Widgets shown in the archive sidebar if the post sidebar is active.',
      ),
    );
    $defaults = array(
      'name' => 'SKM Widget Area',
      'id' => 'skm-sidebar',
      'class' => '',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widgettitle">',
      'after_title' => '</h4>'
    );
    foreach( $widget_areas as $sidebar ) {
      $args = wp_parse_args( $sidebar, $defaults );
      register_sidebar( $args );
    }
}
