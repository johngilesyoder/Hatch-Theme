<?php $count = 1; ?>

<div class="tile-carousel">

  <?php if( $count == 1): ?>
    <div class="gallery-cell">
      <div class="isotope">
  <?php endif; ?>

    
      <?php query_posts( 'post_count=14' ); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php

        // post permalinks
        $permalink = get_permalink();
        // featured image
        $thumb_id = get_post_thumbnail_id();
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
        $thumb_url = $thumb_url_array[0];
        
        switch ($count%7) {
          case 2:
              echo "<a href='$permalink' class='item size2'>";
              break;
          case 4:
              echo "<a href='$permalink' class='item size3'>";
              break;
          default:
              echo "<a href='$permalink' class='item'>";
              break;
        }

        ?>
          
          <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
          <article class="article-wrapper" style="background-image:url('<?php echo $thumb_url ?>');">
          <?php else: ?>
          <article class="article-wrapper">
          <?php endif; ?>
            <div class="gradient-wrapper">
              <hgroup>
                <h2 class="post-author"><?php the_author(); ?></h2>
                <h1 class="post-title"><?php the_title(); ?></h1>
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