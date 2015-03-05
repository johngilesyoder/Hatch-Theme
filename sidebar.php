<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>

  <footer class="sidebar-footer">
    <div class="sidebar-footer-logo">
      <span class="hatch-logo">Hatch</span>
    </div>
    <div class="sidebar-footer-social">
      <div class="sidebar-footer-social-links">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-blog-footer-twitter.svg"></a>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-blog-footer-facebook.svg"></a>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-blog-footer-instagram.svg"></a>
      </div>
      <a href="mailto:hatchinfo@hatchexperience.org" class="sidebar-footer-email">hatchinfo@hatchexperience.org</a>
    </div>
    <div class="sidebar-footer-company">
      © HATCHfest 2004-<?php echo date('Y'); ?>. “HATCH” is a registered trademark. All rights reserved.
    </div>
  </footer>

</aside>
<!-- /sidebar -->
