<?php get_header(); ?>

	<main role="main">
		<div class="container">
			<div class="row">
				<?php if($post->post_parent): ?>
				<div class="page-content">
					<span class="parent-page"><?php echo get_the_title($post->post_parent);?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-parent-chevron.svg"></span>
				<?php else: ?>
				<div class="page-content page-full">
				<?php endif; ?>
					<div class="page-title">
						<h1><?php the_title(); ?></h1>
					</div>

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php the_content(); ?>
						
						<div class="alumni-posts">
							<?php	query_posts( 'post_type=alumnus&posts_per_page=-1&orderby=date&order=ASC' ); ?>
							<?php 
								// featured image
								$thumb_id = get_post_thumbnail_id();
								$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
								$thumb_url = $thumb_url_array[0];
							?>

							<?php while ( have_posts() ) : the_post(); ?>
								<div class="alumnus">
									<?php the_post_thumbnail(); ?>
							    <h3 class="alumnus-name"><?php the_title(); ?></h3>
							    <p class="alumnus-known-for"><strong><?php echo get_post_meta( get_the_ID(), 'wpcf-known-for', true ); ?></strong></p>
							    <?php the_content(); ?>
							  </div>
							<?php endwhile; ?>

							<?php wp_reset_query(); ?>
						</div>
					</article>
					<?php endwhile; ?>
					<?php else: ?>
					<article>
						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
					</article>
					<?php endif; ?>

				</div>

				<?php
				  if($post->post_parent) {
				  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
				  $titlenamer = get_the_title($post->post_parent);
				  }

				  else {
				  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
				  $titlenamer = get_the_title($post->ID);
				  }
				  if ($children) : ?>
				  <div class="page-sidebar">
					  <h2><?php echo $titlenamer; ?></h2>
					  <ul>
					  	<?php echo $children; ?>
					  </ul>
					</div>

					<?php else: ?>
					
					<?php endif; ?>
				</div>
			</div>
		</div>

	</main>

<?php get_footer(); ?>
