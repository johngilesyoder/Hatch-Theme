<?php get_header(); ?>

<div class="container container-blog">
  <div class="blog-roll-wrapper">
    <main role="main">

			<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

    </main>
  </div>
  <div class="blog-sidebar-wrapper">
    <aside class="blog-sidebar">
      <?php get_sidebar(); ?>
    </aside>
  </div>
</div>