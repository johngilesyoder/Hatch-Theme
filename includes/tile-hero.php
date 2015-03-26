<?php $count = 1; ?>

<div class="gallery">

  <?php if( $count == 1): ?>
    <div class="gallery-cell">
      <div class="isotope">
  <?php endif; ?>

    
      <?php query_posts( 'post_count=14' ); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <a href="#" class="item <?php echo $count ?>">
          <article class="article-wrapper" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/fake-post-img.png');">
            <div class="gradient-wrapper">
              <hgroup>
                <h2 class="post-author">Tim Christensen</h2>
                <h1 class="post-title"><?php echo the_title(); ?></h1>
              </hgroup>
            </div>
          </article>
        </a>
        <?php $count++ ?>
    </div>
    <p><?php echo $found_posts ?></p>
  <?php if( $count%7 == 0 || $count == $found_posts): ?>
      </div>
    </div>
  <?php endif; ?>
  <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?> 
</div>