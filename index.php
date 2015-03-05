<?php get_header(); ?>

<div class="container container-blog">
  <div class="blog-roll-wrapper">
    <main role="main">

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