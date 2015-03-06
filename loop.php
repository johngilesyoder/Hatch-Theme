<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<div class="loop-post">
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post title -->
			<h2 class="post-title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<div class="post-meta">
				<span class="author"><?php _e( '', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span> &nbsp;&bull;&nbsp; <span class="date"><?php the_time('F j, Y'); ?></p></span>
			</div>
			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail('full'); // Declare pixel size you need inside the array ?>
				</a>
			<?php endif; ?>

			<div class="post-excerpt">
				<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
			</div>
			<a href="<?php the_permalink(); ?>" class="btn btn-default btn-continue">Continue reading &nbsp;&rarr;</a>
			
			<span class="post-format"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/post-format-article.svg"></span>
		</article>
		<!-- /article -->
	</div>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
