<?php /* Template Name: Home Page Template */ get_header(); ?>
  
  <!-- Posts hero -->
  <section class="posts-hero">
    HERO
  </section>

  <div class="container">
    <!-- Conference -->
  	<section class="section-block section-conference">
      <div class="section-header">
        <h2 class="section-title">HATCH 12 (2015)</h2>
      </div>
    </section>

    <!-- Mentorship -->
    <section class="section-block section-mentorship">
      <div class="section-header">
        <h2 class="section-title">Mentorship</h2>
        <a href="#">Learn More<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-link-chevron.svg"></a>
      </div>
    </section>

    <!-- Upcoming Hatchings -->
    <section class="section-block section-hatchings">
      <div class="section-header">
        <h2 class="section-title">Upcoming Hatchings</h2>
        <a href="#">View Calendar<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-link-chevron.svg"></a>
      </div>
    </section>

    <!-- Partners -->
    <section class="section-block section-partners">
      <div class="section-header">
        <h2 class="section-title">Partners</h2>
        <a href="#">View All HATCH Partners<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-link-chevron.svg"></a>
        <a href="#">Become a Partner<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-link-chevron.svg"></a>
      </div>
    </section>

  </div>

  <!-- What is HATCH -->
  <?php get_template_part( 'includes/what-is-hatch' ); ?>

<?php get_footer(); ?>
