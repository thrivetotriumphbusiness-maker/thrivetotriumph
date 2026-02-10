<?php
get_header();
while (have_posts()) {
  the_post();
  ?>
  <!-- start page title -->
  <?php get_template_part('template-parts/partials/content', 'page-header') ?>
  <!-- end page title -->
  <!-- start section -->
  <section class="bg-very-light-gray">
    <div class="container">
      <div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 justify-content-center"
        data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
        <!-- start features box item -->
        <div class="col icon-with-text-style-04 sm-mb-40px">
          <div class="feature-box last-paragraph-no-margin">
            <div class="feature-box-icon">
              <i class="line-icon-Geo2-Love icon-extra-large text-base-color mb-25px"></i>
            </div>
            <div class="feature-box-content last-paragraph-no-margin">
              <span class="d-inline-block alt-font fw-600 text-dark-gray mb-5px fs-20">Our office</span>
              <p><?php the_field('comp_address', 'option'); ?></p>
            </div>
          </div>
        </div>
        <!-- end features box item -->
        <!-- start features box item -->
        <div class="col icon-with-text-style-04 sm-mb-40px">
          <div class="feature-box last-paragraph-no-margin">
            <div class="feature-box-icon">
              <i class="line-icon-Headset icon-extra-large text-base-color mb-25px"></i>
            </div>
            <div class="feature-box-content last-paragraph-no-margin">
              <span class="d-inline-block alt-font fw-600 text-dark-gray mb-5px fs-20">Call us directly</span>
              <div class="w-100 d-block">
                <?php if (get_field('comp_phone_number', 'option')) { ?>
                  <span class="d-block">Phone 1: <a href="tel:<?php the_field('comp_phone_number', 'option'); ?>"
                      class="text-base-color-hover"><?php the_field('comp_phone_number', 'option'); ?></a></span>
                <?php } ?>
                <?php if (get_field('comp_phone_number_2', 'option')) { ?>
                  <span class="d-block">Phone 2: <a href="tel:<?php the_field('comp_phone_number_2', 'option'); ?>"
                      class="text-base-color-hover"><?php the_field('comp_phone_number_2', 'option'); ?></a></span>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <!-- end features box item -->
        <!-- start features box item -->
        <div class="col icon-with-text-style-04">
          <div class="feature-box last-paragraph-no-margin">
            <div class="feature-box-icon">
              <i class="line-icon-Mail-Read icon-extra-large text-base-color mb-25px"></i>
            </div>
            <div class="feature-box-content last-paragraph-no-margin">
              <span class="d-inline-block alt-font fw-600 text-dark-gray mb-5px fs-20">E-mail us</span>
              <div class="w-100 d-block">
                <?php if (get_field('comp_email', 'option')) { ?>
                  <a href="mailto:<?php the_field('comp_email', 'option'); ?>"
                    class="d-block text-base-color-hover"><?php the_field('comp_email', 'option'); ?></a>
                <?php } ?>
                <?php if (get_field('comp_email_2', 'option')) { ?>
                  <a href="mailto:<?php the_field('comp_email_2', 'option'); ?>"
                    class="d-block text-base-color-hover"><?php the_field('comp_email_2', 'option'); ?></a>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <!-- end features box item -->
      </div>
    </div>
  </section>
  <!-- end section -->
  <!-- start section -->
  <section>
    <div class="container">
      <div class="row justify-content-center mb-3">
        <div class="col-lg-7 text-center"
          data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
          <span class="fw-600 ls-1px fs-16 alt-font d-inline-block text-uppercase mb-5px text-base-color">
            Feel free to get in touch!
          </span>
          <h3 class="text-dark-gray fw-600 ls-minus-2px mb-50px">
            How we can help you?
          </h3>
        </div>
      </div>
      <div class="row row-cols-md-1 justify-content-center">
        <div class="col-xl-9 overflow-hidden">
          <?php echo do_shortcode('[contact-form-7 id="24c38b2" title="Contact"]') ?>
        </div>
      </div>
    </div>
  </section>
  <!-- end section -->
  <!-- start section -->
  <section class="p-0 bg-white" id="location"
    data-anime='{ "translate": [0, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 p-0">
          <div style="height:500px">
            <iframe
              src="https://maps.google.com/maps?q=<?php the_field('comp_lat', 'option') ?>,<?php the_field('comp_long', 'option') ?>&z=15&output=embed"
              width="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
              style="height: 100%"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end section -->
  <?php
}
get_footer(); ?>