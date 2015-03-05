<?php get_header(); ?>
<div class="container container-blog">
  <div class="blog-roll-wrapper">

		<main role="main">
			<div class="view-all-posts">
				<a href="/blog"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-chevron-orange-left.svg" >View all posts</a>
			</div>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<!-- post title -->
					<h1 class="post-title">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h1>
					<span class="author"><?php _e( 'By', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>

					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(); // Fullsize image for the single post ?>
						</a>
					<?php endif; ?>

					<?php the_content(); // Dynamic Content ?>

					<div class="share-post">
						<strong class="share-title">Share:</strong>
						<div class="like-button">
							<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
						</div>
						<div class="tweet-button">
							<a href="https://twitter.com/share" class="twitter-share-button" data-via="kindkudos" data-count="none">Tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
						</div>
						<div class="pinterest-button">
							<a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" ><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" /></a>
							<!-- Please call pinit.js only once per page -->
							<script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
						</div>
					</div>

					<?php comments_template(); ?>

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php endif; ?>

		</main>
	</div>

			
  <div class="blog-sidebar-wrapper">
    <aside class="blog-sidebar">
      <?php get_sidebar(); ?>
    </aside>
  </div>
</div>