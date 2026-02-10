<!-- start section -->
<?php
  $footer_banner_img = get_theme_mod('footer_banner_image');
  $footer_banner_img_url = wp_get_attachment_image_url($footer_banner_img, 'page_slider');
  $footer_banner_img_alt = get_post_meta($footer_banner_img, '_wp_attachment_image_alt', true);
?>
<section class="pt-4 pb-4 cover-background" style="background-image:url('<?php echo $footer_banner_img ? $footer_banner_img_url : 'https://placehold.co/1920x408' ?>');">
  <div class="opacity-extra-medium bg-gradient-black-dark-orange" style="backdrop-filter: brightness(50%);"></div>
  <div class="container position-relative">
    <div class="row align-items-center justify-content-center text-start text-sm-center text-lg-start">
      <div class="col-xl-5 col-lg-6 col-md-7 md-mb-25px">
        <h2
          class="alt-font text-white fw-500 mb-0 cd-headline zoom fancy-text-style-4 text-shadow-double-large ls-minus-1px">
          Let's discuss your now
          <span data-fancy-text='{ "effect": "rotate", "string": ["consulting!", "business!", "innovative!"] }'></span>
        </h2>
      </div>
      <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 offset-xl-1 icon-with-text-style-08">
        <div class="feature-box feature-box-left-icon-middle text-start">
          <div
            class="feature-box-icon feature-box-icon-rounded w-110px h-110px xs-w-80px xs-h-80px rounded-circle bg-base-color me-20px xs-me-15px">
            <i class="line-icon-Handshake icon-extra-large text-white lh-100"></i>
          </div>
          <div class="feature-box-content last-paragraph-no-margin xs-mt-15px xs-mb-15px">
            <span class="fs-24 lh-32 xs-fs-22 xs-lh-32 text-white">Looking for collaboration? <a
                href="mailto:<?php the_field('comp_email', 'option'); ?>"
                class="text-decoration-line-bottom text-white fw-500"><?php the_field('comp_email', 'option'); ?></a></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end section -->
<!-- start footer -->
<footer class="footer-light p-0 position-relative">
  <div id="particles-04" class="position-absolute h-100 top-0 left-0 z-index-minus-1 w-100" data-particle="true"
    data-particle-options='{"particles": {"number": {"value": 5,"density": {"enable": true,"value_area": 1000}},"color":{"value":["#b7b9be", "#dd6531"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 0.5,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"move": {"enable": true,"speed":2,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'>
  </div>
  <div class="container">
    <div class="row justify-content-center pt-7 sm-pt-50px">
      <!-- start footer column -->
      <div class="col-12 col-lg-6 col-md-12 text-center text-lg-start md-mb-30px">
        <a href="<?php echo esc_url(home_url()) ?>" class="footer-logo mb-15px md-mb-20px d-inline-block"><img
            src="<?php echo get_theme_file_uri('assets/images/thrive_logo_base.webp') ?>"
            data-at2x="<?php echo get_theme_file_uri(('assets/images/thrive_logo_base@2x.webp')) ?>"
            alt="Footer Logo"></a>
        <p class="mb-20px"><?php echo get_theme_mod('set_footer_site_desc') ?></p>
        <div class="elements-social social-icon-style-02">
          <ul class="medium-icon dark icon-with-animation">
            <?php if (have_rows('comp_sosmed_links', 'option')) {
              while (have_rows('comp_sosmed_links', 'option')) {
                the_row();
                ?>
                <li><a rel="noopener noreferrer" href="<?php echo get_sub_field('comp_sosmed_url') ?>" target="_blank"><i
                      class="<?php echo get_sub_field('comp_sosmed_icon') ?>"></i></a></li>
              <?php }
            } ?>
          </ul>
        </div>
      </div>
      <!-- end footer column -->
      <!-- start footer column -->
      <div class="col-6 col-lg-3 col-md-4 md-mb-30px useful-links">
        <span class="alt-font d-block text-dark-gray fw-600 mb-10px fs-19">Useful Links</span>
        <ul class="text-dark-gray">
          <li><a href="<?php echo esc_url(site_url('about')) ?>"
              class="nav-link">About</a>
          </li>
          <li><a href="<?php echo esc_url(site_url('/')) ?>" data-target="service"
              class="nav-link inner-link">Services</a></li>
          <li><a href="<?php echo esc_url(site_url('client')) ?>" class="nav-link">Clients</a></li>
          <li><a href="<?php echo esc_url(site_url('contact')) ?>" class="nav-link">Contact</a></li>
        </ul>
      </div>
      <!-- end footer column -->
      <!-- start footer column -->
      <div class="col-6 col-lg-3 col-md-4 xs-mb-30px">
        <span class="alt-font d-block text-dark-gray fw-600 mb-10px fs-19">Get in touch</span>
        <p class="mb-15px w-75 lg-w-85 sm-w-100"><?php the_field('comp_address', 'option'); ?></p>
        <p class="m-0"><span class="fw-600"><i
              class="feather icon-feather-phone-call text-dark-gray icon-small me-10px"></i></span><a
            href="tel:<?php the_field('comp_phone_number', 'option'); ?>"
            class="text-base-color-hover"><?php the_field('comp_phone_number', 'option'); ?></a></p>
        <p class="m-0"><span class="fw-600"><i
              class="feather icon-feather-mail text-dark-gray icon-small me-10px"></i></span> <a
            href="mailto:<?php the_field('comp_email', 'option'); ?>"
            class="text-base-color-hover"><?php the_field('comp_email', 'option'); ?></a></p>
      </div>
      <!-- end footer column -->
      <!-- start footer column -->
      <?php if (false): ?>
        <!-- <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6">
        <span class="alt-font d-block text-dark-gray fw-600 mb-10px fs-19">Newsletter</span>
        <p class="sm-mb-20px">Subscribe our newsletter to get the latest news and updates.</p>
        <div class="d-inline-block w-100 newsletter-style-02 position-relative">
          <?php echo do_shortcode('[newsletter_form form="1" button_label="Subs"]') ?>
        </div>
      </div> -->
      <?php endif; ?>
      <!-- end footer column -->
    </div>
    <div class="row justify-content-center align-items-center pt-5 sm-pt-30px">
      <!-- start divider -->
      <div class="col-12">
        <div class="divider-style-03 divider-style-03-01 border-color-extra-medium-gray"></div>
      </div>
      <!-- end divider -->
      <!-- start copyright -->
      <div
        class="col-lg-6 pt-25px pb-25px md-pt-0 fs-16 last-paragraph-no-margin order-2 order-lg-1 text-center text-lg-start">
        <p><?php echo wp_kses_post(wp_specialchars_decode(get_theme_mod('set_copyright_text'))) ?></p>
      </div>
      <!-- end copyright -->
      <!-- start footer menu -->
      <div class="col-lg-6 pt-25px pb-25px md-pb-5px fs-16 order-1 order-lg-2 text-center text-lg-end">
        <ul class="footer-navbar md-lh-normal">
          <li class="nav-item"><a href="<?php echo esc_url(site_url('privacy-policy')) ?>" class="nav-link">Privacy
              policy</a></li>
          <!-- <li class="nav-item"><a href="#" class="nav-link">Terms and conditions</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Copyright</a></li> -->
        </ul>
      </div>
      <!-- end footer menu -->
    </div>
  </div>
</footer>
<!-- end footer -->
<!-- start scroll progress -->
<div class="scroll-progress d-none d-xxl-block">
  <a href="#" class="scroll-top" aria-label="scroll">
    <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
  </a>
</div>
<!-- end scroll progress -->
<?php
wp_footer();
?>
</body>

</html>