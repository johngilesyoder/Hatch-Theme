<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div class="page-title">
				<div class="container">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-push-8 sidebar">
						<img class="logo img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-color.svg" alt="Logo">
						<a href="/the-kindkudos-story/">Read the Kindkudos story &nbsp;&rarr;</a>
					</div>
					<div class="col-md-8 col-md-pull-4">
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>

							<!-- article -->
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

								<?php the_content(); ?>

							</article>
							<!-- /article -->

						<?php endwhile; ?>

						<?php else: ?>

							<!-- article -->
							<article>

								<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

							</article>
							<!-- /article -->

						<?php endif; ?>
					</div>
				</div>
			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
