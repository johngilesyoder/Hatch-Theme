<div class="mobile-carousel">
  <?php 
    if (have_posts()): while (have_posts()) : the_post(); 
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
    $thumb_url = $thumb_url_array[0];
  ?>
	<div class="gallery-cell">
      <article class="article-wrapper" style="background-image:url('<?php echo $thumb_url ?>');">
        <div class="gradient-wrapper">
          <hgroup>
            <h2 class="post-author"><?php the_author(); ?> </h2>
            <h1 class="post-title"><?php the_title(); ?></h1>
          </hgroup>
        </div>
      </article>
  </div>
  <?php endwhile; ?>

  <?php else: ?>

    <!-- article -->
    <article>
      <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
    </article>
    <!-- /article -->

  <?php endif; ?>
</div>