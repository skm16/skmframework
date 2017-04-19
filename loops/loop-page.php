<div class="wrap">
 <div class="container-fluid">
  <div class="row">
   <div class="<?php if ( is_active_sidebar( 'page-sidebar' ) ) : echo 'col-md-9'; else: echo 'col-sm-12'; endif; ?>">
    <div class="single-post-wrapper">
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php echo '<div class="post-thumbnail-wrapper">'; the_post_thumbnail(); echo '</div>';  ?>
        <header class="single-post-title">
         <h1><?php the_title(); ?></h1>
        </header>
        <div class="single-post-meta">
         <p>Post by <?php the_author(); ?> in <?php the_category(', '); ?> on <?php echo get_the_date(); ?></p>
        </div>
        <div class="single-post-content">
         <?php if(post_password_required()):
          echo skmframework_password_form();
         else:
          the_content();
         endif; ?>
         <div class="clearfix"></div>
         <?php edit_post_link('edit', '<p>', '</p>'); ?>
        </div>

      </article>
      <div class="single-post-comments-wrapper">
       <?php if ( comments_open() || get_comments_number() ) :
  						comments_template();
       endif; ?>
      </div>
      <div class="single-post-pagination">
       <div class="alignleft">
        <?php previous_post_link(); ?>
       </div>
       <div class="alignright">
        <?php next_post_link(); ?>
       </div>
       <?php wp_link_pages( array(
	       'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'skmframework' ) . '</span>',
	       'after'       => '</div>',
	       'link_before' => '<span>',
	       'link_after'  => '</span>',
	       ) );
        ?>
       <div class="clearfix"></div>
      </div>
     <?php endwhile; ?>
     <?php else: echo '<h2>Sorry, nothing found!</h2><p><a href="'.home_url().'" title="'.get_bloginfo('title').'">Click here to return to the homepage.</a></p>'; endif; ?>
    </div>
   </div>
   <?php get_sidebar(); ?>
  </div>
 </div>
</div>
