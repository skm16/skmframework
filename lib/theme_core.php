<?php
// wp_title support
add_action( 'after_setup_theme', 'skmframework_title_tag' );
function skmframework_title_tag() {
    add_theme_support( 'title-tag' );
}
function skmframework_wp_title_for_home( $title ) {
  if ( empty( $title ) && ( is_home() || is_front_page() ) ) {
    $title = __( 'Home', 'skmframework' ) . ' | ' . get_bloginfo( 'description' );
  }
  return $title;
}
add_filter( 'wp_title', 'skmframework_wp_title_for_home' );
// add post the_post_thumbnail
add_theme_support( 'post-thumbnails' );
// skm if has pagination
function skmframework_show_posts_nav() {
 global $wp_query;
 return ($wp_query->max_num_pages > 1);
}
// add google analytics
add_action('wp_footer', 'skmframework_add_googleanalytics');
function skmframework_add_googleanalytics() { ?>


<?php }
// skm remove wp version number
function skmframework_remove_version() {
  return '';
}
add_filter('the_generator', 'skmframework_remove_version');
// skm archive link title
function skmframework_archive_page_title() {
  $queried_object = get_queried_object();
  if(is_home()):
    $archive_page_title = 'Blog';
  elseif(is_category()):
    $archive_page_title = $queried_object->name;
  elseif(is_date()):
    $monthnum = get_query_var('monthnum');
    $monthname = $GLOBALS['wp_locale']->get_month($monthnum);
    $archive_page_title = 'Published in '. $monthname.' '.get_query_var('year');
  elseif(is_tag()):
    $archive_page_title = 'Tagged in <span class="text-capitalize">'.$queried_object->name.'</span>';
  elseif(is_author()):
    $archive_page_title = '<span>Articles by '.get_the_author().'</span>';
  elseif(is_404()):
    $archive_page_title = '404 - Page not found.';
  endif;
  return $archive_page_title;
}
// skm password form
function skmframework_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    ' . __( "To view this protected post, enter the password below:" ) . '
    <br/><label for="' . $label . '">' . __( "Password:" ) . ' </label><br/><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" /><input type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" />
    </form>
    ';
    return $o;
}
add_filter( 'the_password_form', 'skmframework_password_form' );
// add theme editor styles
function skmframework_theme_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'skmframework_theme_add_editor_styles' );
// add automatic-feed-links support
add_theme_support( 'automatic-feed-links' );
// custom theme headers
function skmframework_custom_header_setup() {
    $args = array(
        'default-image'      => '',
        'default-text-color' => '000',
        'width'              => 500,
        'height'             => 250,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'skmframework_custom_header_setup' );
// custom theme background
$args = array(
	'default-color' => 'ffffff',
	'default-image' => '',
);
add_theme_support( 'custom-background', $args );
// custom logo support
function skmframework_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'skmframework_custom_logo_setup' );

// set content width
if ( ! isset( $content_width ) ) $content_width = 1200;

// comments js
function skmframework_queue_js(){
if ( (!is_admin()) && is_singular() && comments_open() && get_option('thread_comments') )
  wp_enqueue_script( 'comment-reply' );
}
add_action('wp_print_scripts', 'skmframework_queue_js');

// read more link
function skmframework_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'skmframework' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'skmframework_excerpt_more' );

// html 5 support
add_theme_support( 'html5', array(
 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
) );

// get acf image field attributes
function skm_get_acf_image_with_atts($image, $image_size, $class, $id) {
  if( !empty($image) ):
  	$url = $image['url'];
   $title = $image['title'];
  	$alt = $image['alt'];
  	$id = $image['ID'];
  	$size = $image_size;
   if($image_size === 'full'):
    $thumb = $image['url'];
    $width = $image['width'];
    $height = $image['height'];
   else:
  	 $thumb = $image['sizes'][ $size ];
  	 $width = $image['sizes'][ $size . '-width' ];
  	 $height = $image['sizes'][ $size . '-height' ];
   endif;
   $custom_classes = '';
   $image = '<img src="'.$thumb.'" alt="'.$alt.'" height="'.$height.'" id="'.$id.'" width="'.$width.'" title="'.$title.'" class="'.$class.'"  />';
    return $image;
  else:
    return '<img src="'.get_stylesheet_directory_uri().'/assets/public/images/no-image.jpg" alt="'.$alt.'" height="121" width="120" title="No image available" class="no-image-available"  />';
  endif;
};

// get acf image field url
function skm_get_acf_image_url($image, $image_size) {
  if( !empty($image) ):
  	$url = $image['url'];
  	$size = $image_size;
  	$thumb = $image['sizes'][ $size ];
   return $thumb;
  endif;
};

// acf register options page
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

// allow svg upload
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/**
* Disable the emoji's
*/
function disable_emojis() {
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );

/**
* Filter function used to remove the tinymce emoji plugin.
*
* @param array $plugins
* @return array Difference betwen the two arrays
*/
function disable_emojis_tinymce( $plugins ) {
if ( is_array( $plugins ) ) {
return array_diff( $plugins, array( 'wpemoji' ) );
} else {
return array();
}
}

/**
* Remove emoji CDN hostname from DNS prefetching hints.
*
* @param array $urls URLs to print for resource hints.
* @param string $relation_type The relation type the URLs are printed for.
* @return array Difference betwen the two arrays.
*/
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
if ( 'dns-prefetch' == $relation_type ) {
/** This filter is documented in wp-includes/formatting.php */
$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

$urls = array_diff( $urls, array( $emoji_svg_url ) );
}

return $urls;
}

// Find the image id from a URL
function url_get_image_id($image_url) {
   global $wpdb;
   $attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image_url ));
   return $attachment[0];
}

// determine whether post has a featured image, if not, find the first image inside the post content, $size passes the thumbnail size, $url determines whether to return a URL or a full image tag
function checkImageType($size, $type) {
   global $post;
   $content = $post->post_content;
   $first_img = '';
   ob_start();
   ob_end_clean();
   $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $content, $matches);
   $first_img = $matches[1][0];
   /*If there's a featured image, show it*/
   if (get_the_post_thumbnail($post_id) != '' ) {
       if($type=='url') {
           the_post_thumbnail_url($size);
       } else {
           the_post_thumbnail($size);
       }
   } else {
       /*No featured image, so we get the first image inside the post content*/
       if ($first_img) {
           //let's get the correct image dimensions
           $image_id = url_get_image_id($first_img);
           $image_thumb = wp_get_attachment_image_src($image_id, $size);
           // if we've found an image ID, correctly display it
           if($image_thumb) {
               if($type=='url') {
                   echo $image_thumb[0];
               } else {
                   echo '<img src="'.$image_thumb[0].'" alt="'.get_the_title().'"/>';
               }
           } else {
               //if no image (i.e. from an external source), echo the original URL
               if($type=='url') {
                   echo $first_img;
               } else {
                   echo '<img src="'.$first_img.'" alt="'.get_the_title().'"/>';
               }

           }
       }
   }
}
