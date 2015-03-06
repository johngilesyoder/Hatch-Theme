<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

  <div class="widget_categories">
    <h3>Categories</h3>
    <ul>
    	<?php $tags = get_tags();
      if ($tags) {
      foreach ($tags as $tag) {
      echo '<li><a href="' . get_tag_link( $tag->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $tag->name ) . '" ' . '>' . $tag->name.'</a></li> ';
      }
      }
      ?>
    </ul>
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
