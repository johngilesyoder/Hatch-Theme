<?php get_header(); ?>

<div class="page-title">
  <h1><?php _e( 'Musings on Kindness & Encouragement', 'html5blank' ); ?></h1>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <main role="main">

        <?php get_template_part('loop'); ?>

        <?php get_template_part('pagination'); ?>

      </main>
    </div>
    <div class="col-md-4">
      <div class="get-the-app">
        <img class="widget-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-color.svg">
        <img class="widget-feature" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-widget-feature.png">
        <span class="widget-text">Get the app now!</span>
        <div class="app-stores">
          <a href="https://itunes.apple.com/us/app/kindkudos-spread-receive-kindness/id938890129?ls=1&mt=8"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/badge-app-store.svg" alt="Download on the App Store"></a>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/badge-google-play.svg" alt="Get it on Google Play" -->
        </div>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<div class="contact-callout">
  <div class="container">
    Questions? Comments? Please feel free to <a href="#">contact us</a>.
  </div>
</div>
<?php get_footer(); ?>