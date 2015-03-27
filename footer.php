			<footer class="site-footer">
				<div class="footer-main">
	      	<div class="container">
	      		<div class="row">
		      		<div class="footer-connect">
		      			<span class="hatch-logo">HATCH</span>
		      			<div class="footer-social-links">
		      				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-footer-twitter.svg"></a>
		      				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-footer-facebook.svg"></a>
		      				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-footer-instagram.svg"></a>
		      			</div>
		      			<a href="mailto:hatchinfo@hatchexperience.org" class="footer-email"><span class="long-email">hatchinfo@hatchexperience.org</span><span class="short-email">Email us</span></a>
		      		</div>
		      		<div class="footer-links">
		      			<nav class="links-column">
		      				<?php footer_links_1(); ?>
		      			</nav>
		      			<nav class="links-column">
		      				<?php footer_links_2(); ?>
		      			</nav>
		      			<nav class="links-column">
		      				<?php footer_links_3(); ?>
		      			</nav>
		      		</div>
		      	</div>
	      	</div>
	      </div>
        <div class="footer-company">
        	<div class="container">
          	<span>© HATCHfest 2004-<?php echo date('Y'); ?>. </span>“HATCH” is a registered trademark. All rights reserved. All logos, except for HATCH logos, are trademarks of their respective companies.
        	</div>
	      </div>
	    </footer>


		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
