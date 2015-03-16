<?php /* Template Name: Contact Page Template */ get_header(); ?>

  <main role="main">

    <div class="container">
      <div class="row">
        <div class="contact-left">
          <div class="row">
            <div class="general-enquiry">
              <h2>General Enquiry</h2>
              <?php if (have_posts()): while (have_posts()) : the_post(); ?>

              <!-- article -->
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php the_content(); ?>

              </article>
              <!-- /article -->

            <?php endwhile; ?>

            <?php endif; ?>
              <address class="contact-address">
                627 E Peach St.<br>
                Bozeman, MT 59715
              </address>
              <span class="contact-phone">406-209-9809</span>
              <a class="contact-email-address" href="mailto:hatchinfo@hatchexperience.org">hatchinfo@hatchexperience.org</a>
            </div>
            <div class="connect">
              <h2>Connect</h2>
              <a class="social-link" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-footer-twitter.svg"></a>
              <a class="social-link" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-footer-facebook.svg"></a>
              <a class="social-link" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-footer-instagram.svg"></a>
            </div>
          </div>
        </div>
        <div class="contact-right">
          <div class="corporate-enquiry">
            <div class="enquiry-contact">
              <div class="enquiry-wrapper">
                <h2>Contact Us</h2>
                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vestibulum id ligula porta felis euismod semper.</p>
                <form accept-charset="UTF-8" action="/contact" class="contact-form" method="post"><input name="form_type" type="hidden" value="contact"><input name="utf8" type="hidden" value="✓">
                  <div id="contactFormWrapper">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" id="contactFormName" class="form-control" name="contact[name]" placeholder="Full name" autocapitalize="words" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="tel" id="contactFormPhone" class="form-control" name="contact[phone]" placeholder="Phone number" pattern="[0-9]*" value="">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="email" id="contactFormEmail" class="form-control" name="contact[email]" placeholder="Email address" autocorrect="off" autocapitalize="off" value="">
                    </div>
                    <textarea rows="5" id="contactFormMessage" class="form-control" name="contact[body]" placeholder="Enquiry details"></textarea>
                    <button type="submit" class="btn btn-primary">Send</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

<?php get_footer(); ?>



