<div class="wrap">
 <div class="container-fluid">
  <div class="row">
   <div class="col-sm-12">
    <h1 class="archive-page-title"><?php echo skmframework_archive_page_title(); ?></h1>
   </div>
  </div>
  <div class="row">
   <div class="<?php if ( is_active_sidebar( 'archive-sidebar' ) ) : echo 'col-md-9'; else: echo 'col-sm-12'; endif; ?>">
    <div class="article-roll-wrapper">
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="row">
         <?php if ( has_post_thumbnail() ) : ?>
          <div class="col-xs-3 col-sm-2">
           <?php echo '<div class="post-thumbnail-wrapper"><a href="'.get_permalink().'" title="Link to '.get_the_title().'">'; the_post_thumbnail(array(150,150)); echo '</a></div>';  ?>
          </div>
         <?php endif; ?>
         <div class="<?php if ( has_post_thumbnail() ) : echo 'col-xs-9 col-sm-10'; else: echo 'col-xs-12'; endif; ?>">
          <header class="post-roll-title">
           <h3><a href="<?php the_permalink(); ?>" title="Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
          </header>
          <div class="post-roll-meta">
           <p>Post by <?php the_author(); ?> in <?php the_category(', '); ?> on <?php echo get_the_date(); ?></p>
          </div>
          <div class="post-roll-excerpt">
           <?php the_excerpt(); ?>
           <?php edit_post_link('edit', '<p>', '</p>'); ?>
          </div>
         </div>
        </div>
      </article>
     <?php endwhile; ?>
     <?php if(skmframework_show_posts_nav()): ?>
     <div class="article-roll-pagination">
      <div class="nav-previous alignleft"><?php next_posts_link( '< Older posts' ); ?></div>
      <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts >' ); ?></div>
     </div>
     <?php endif; ?>
    <?php else: echo '<h2>Sorry no posts found!</h2>'; endif; ?>
    </div>
   </div>
   <?php get_sidebar(); ?>
  </div>
 </div>
</div>
