<?php $count = 1; ?>

<div class="gallery">

  <?php if( $count == 1): ?>
    <div class="gallery-cell">
      <div class="isotope">
  <?php endif; ?>

    
      <?php query_posts( 'post_count=14' ); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php

        switch ($count%7) {
          case 2:
              echo '<a href="#" class="item size2">';
              break;
          case 4:
              echo '<a href="#" class="item size3">';
              break;
          default:
              echo '<a href="#" class="item">';
              break;
        }

        ?>
        
          <article class="article-wrapper" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/fake-post-img.png');">
            <div class="gradient-wrapper">
              <hgroup>
                <h2 class="post-author"><?php echo $count ?></h2>
                <h1 class="post-title"><?php echo the_title(); ?></h1>
              </hgroup>
            </div>
          </article>
        </a>
  <?php if( $count == $wp_query->post_count || $count%7 == 0): ?>
    </div>
  </div>
  <?php endif; ?>
        <?php $count++ ?>
  <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?> 
    
</div>