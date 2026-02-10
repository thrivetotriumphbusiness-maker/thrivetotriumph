<?php
get_header();
?>
<!-- start banner -->
<?php
$home_header_img = get_theme_mod('set_home_header_image');
$home_header_img_url = wp_get_attachment_image_url($home_header_img, 'main_slider');
$home_header_img_alt = get_post_meta($home_header_img, '_wp_attachment_image_alt', true);
?>
<section class="top-space-margin p-0 full-screen md-h-600px sm-h-500px section-dark"
  data-parallax-background-ratio="0.8"
  style="background-image: url('<?php echo $home_header_img ? $home_header_img_url : 'https://placehold.co/1920x1100' ?>')">
  <div class="container h-100">
    <div class="row align-items-center h-100">
      <div class="col-xl-7 col-md-9 col-sm-9 position-relative text-white"
        data-anime='{ "el": "childs", "opacity": [0, 1], "translateY": [30, 0], "staggervalue": 200, "easing": "easeInOutSine" }'>
        <div class="fs-80 lh-75 sm-fs-65 fw-600 mb-20px text-shadow-large ls-minus-2px"><?php echo get_theme_mod('set_home_header_title', '') ?>
        </div>
        <div>
          <span class="opacity-8 fs-20 w-70 md-w-85 mb-25px fw-300 d-inline-block"><?php echo get_theme_mod('set_home_header_desc', '') ?></span>
        </div>
        <div class="icon-with-text-style-08">
          <div class="feature-box feature-box-left-icon-middle">
            <div
              class="feature-box-icon feature-box-icon-rounded w-65px h-65px rounded-circle bg-base-color me-15px rounded-box">
              <i class="feather icon-feather-arrow-right text-dark-gray icon-extra-medium text-white"></i>
            </div>
            <div class="feature-box-content">
              <a href="#about" class="d-inline-block fs-19 text-white text-shadow-double-large">Discover More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end banner -->
<?php
$about_page_args = [
  'post_type' => 'page',
  'name' => 'about' // page ID
];

$about_page = new WP_Query($about_page_args);
if ($about_page->have_posts()):
  while ($about_page->have_posts()):
    $about_page->the_post();
    ?>

    <?php
    $about_sec_image = get_field('about_sec_image');
    $ext_vid_url = get_field('comp_profile_video_url');
    ?>
    <!-- start section -->
    <section id="about">
      <div class="container">
        
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 col-md-9 md-mb-50px"
            data-anime='{ "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <figure class="position-relative m-0 border-radius-5px overflow-hidden">
              <img
                src="<?php echo $about_sec_image ? $about_sec_image['sizes']['section_image1'] : 'https://placehold.co/600x590' ?>"
                alt="<?php echo $about_sec_image['alt'] ?>" class="w-100">
              <?php if ($ext_vid_url) { ?>
                <a href="<?php echo $ext_vid_url ?>"
                  class="absolute-middle-center text-center rounded-circle video-icon-box video-icon-large popup-vimeo">
                  <span>
                    <span class="video-icon bg-white">
                      <i class="fa-solid fa-play text-dark-gray"></i>
                      <span class="video-icon-sonar">
                        <span class="video-icon-sonar-bfr border border-color-white"></span>
                      </span>
                    </span>
                  </span>
                </a>
              <?php } ?>
              <?php if (get_field('about_sec_total_project')): ?>
                <figcaption
                  class="position-absolute bottom-25px left-25px w-250px border-radius-4px bg-white d-flex align-items-center pt-20px pb-20px ps-25px pe-25px"
                  data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 800, "delay": 1200, "staggervalue": 100, "easing": "easeOutQuad" }'>
                  <h2
                    class="text-dark-gray fw-700 ls-minus-3px sm-ls-minus-2px vertical-counter d-inline-flex mb-0 text-nowrap border-end border-1 border-color-extra-medium-gray pe-20px me-20px"
                    data-to="<?php echo get_field('about_sec_total_project') ?>"></h2>
                  <span class="text-dark-gray lh-22 fw-500 d-inline-block">Project completed</span>
                </figcaption>
              <?php endif; ?>
            </figure>
          </div>
          <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-9"
            data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
            <?php
            if (get_field('about_sec_subtitle')) {
              ?>
              <span
                class="fw-600 ls-1px fs-16 alt-font d-inline-block text-uppercase mb-5px text-base-color"><?php echo get_field('about_sec_subtitle') ?></span>
            <?php } ?>
            <h3 class="fw-600 text-dark-gray ls-minus-2px"><?php echo get_field('about_sec_title') ?>
            </h3>
            <p class="w-90 lg-w-100 md-mx-auto mb-35px"><?php
            // echo apply_filters('the_content', get_the_content(null, false));
            echo wp_trim_words(wp_strip_all_tags(strip_shortcodes(get_the_content(null, false))), 50);
            ?></p>
            <a href="<?php echo esc_url(site_url('about')) ?>"
              class="btn btn-large btn-rounded with-rounded btn-base-color btn-box-shadow me-20px">Learn About Us<span
                class="bg-white text-base-color"><i class="feather icon-feather-arrow-right"></i></span></a>
          </div>
        </div>
      </div>
    </section>
    <!-- end section -->
    <?php
  endwhile;
  wp_reset_postdata();
endif;
?>
<!-- start section -->
<section id="client" class="pt-0 border-bottom border-color-transparent-dark-very-light"
  data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
  <div class="container">
    <div class="row mb-45px md-mb-30px">
      <div class="col-12 text-center">
        <span class="fs-26 fw-500 ls-minus-1px text-dark-gray">Trusted by the world's fastest growing companies</span>
      </div>
    </div>
    <div class="row position-relative clients-style-08">
      <div class="col swiper text-center feather-shadow"
        data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 4000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false, "pauseOnMouseEnter": true }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
        <div class="swiper-wrapper marquee-slide">
          <?php
          $clientArgs = [
            'post_type' => 'client',
            'posts_per_page' => 15,
            'orderby' => 'menu_order',
            'order' => 'ASC',
          ];
          $clients = new WP_Query($clientArgs);
          if ($clients->have_posts()):
            while ($clients->have_posts()):
              $clients->the_post();
              $client_img = get_field('client_logo');
              ?>
              <!-- start client item -->
              <div class="swiper-slide">
                <a href="<?php echo get_field('client_website') ?: '#' ?>" title="<?php the_title() ?>"
                  rel="noopener noreferrer" target="_blank"><img src="<?php echo $client_img['url']; ?>"
                    class="h-45px xs-h-30px" alt="<?php echo $client_img['alt']; ?>" /></a>
              </div>
              <!-- end client item -->
              <?php
            endwhile;
            wp_reset_postdata();
          endif;
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="overflow-hidden bg-very-light-gray position-relative" id="service">
  <div class="container">
    <div class="row align-items-center mb-5 sm-mb-30px text-center text-lg-start"
      data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
      <div class="col-lg-5 md-mb-30px">
        <span class="fw-600 ls-1px fs-16 alt-font d-inline-block text-uppercase mb-5px text-base-color">Innovative
          solutions</span>
        <h3 class="text-dark-gray fw-700 ls-minus-2px mb-0">Understanding the business services.</h3>
      </div>
      <div class="col-lg-4 offset-xl-1 last-paragraph-no-margin md-mb-30px">
        <p>We support clients and partners in improving performance and service quality through human capital
          development focused on mindset, skills, and continuous innovative learning.</p>
      </div>
      <div class="col-xl-2 col-lg-3 d-flex justify-content-center">
        <!-- start slider navigation -->
        <div
          class="slider-one-slide-prev-1 icon-small text-dark-gray swiper-button-prev slider-navigation-style-04 bg-white box-shadow-large">
          <i class="fa-solid fa-arrow-left"></i>
        </div>
        <div
          class="slider-one-slide-next-1 icon-small text-dark-gray swiper-button-next slider-navigation-style-04 bg-white box-shadow-large">
          <i class="fa-solid fa-arrow-right"></i>
        </div>
        <!-- end slider navigation -->
      </div>
    </div>
    <div class="row align-items-center"
      data-anime='{ "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
      <div class="col-12">
        <div class="outside-box-right-20 sm-outside-box-right-0">
          <div class="swiper magic-cursor slider-one-slide"
            data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
            <div class="swiper-wrapper">
              <?php
              $serviceArgs = [
                'post_type' => 'service',
                'posts_per_page' => 20,
                'orderby' => 'menu_order',
                'order' => 'ASC',
              ];
              $services = new WP_Query($serviceArgs);
              if ($services->have_posts()):
                while ($services->have_posts()):
                  $services->the_post();
                  $srv_img = get_field('srv_content_img');
                  ?>
                  <!-- start slider item -->
                  <div class="swiper-slide">
                    <!-- start services box style -->
                    <div class="services-box-style-03 last-paragraph-no-margin border-radius-6px overflow-hidden">
                      <div class="position-relative">
                        <a href="#popup-modal-srv-<?php the_ID() ?>" class="modal-popup"><img
                            src="<?php echo $srv_img ? $srv_img['sizes']['service_image'] : 'https://placehold.co/600x440' ?>"
                            alt=""></a>
                      </div>
                      <div class="bg-white">
                        <div class="ps-65px pe-65px pt-30px pb-30px text-center">
                          <a href="#popup-modal-srv-<?php the_ID() ?>"
                            class="d-inline-block fs-18 fw-700 text-dark-gray mb-5px modal-popup"><?php the_title(); ?></a>
                          <p><?php echo wp_trim_words(wp_strip_all_tags(get_field('srv_content')), 5, '...'); ?></p>
                        </div>
                        <div
                          class="d-flex justify-content-center border-top border-color-extra-medium-gray pt-20px pb-20px ps-50px pe-50px position-relative text-center">
                          <a href="#popup-modal-srv-<?php the_ID() ?>"
                            class="btn btn-link btn-hover-animation-switch btn-medium fw-700 text-dark-gray text-uppercase modal-popup">
                            <span>
                              <span class="btn-text">Learn More</span>
                              <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                              <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <!-- end services box style -->
                  </div>
                  <!-- end slider item -->
                  <div id="popup-modal-srv-<?php the_ID() ?>"
                    class="white-popup-block reset-for-wysiwyg mfp-hide col-xl-5 col-lg-6 col-md-7 col-11 mx-auto bg-white modal-popup-main p-50px">
                    <span class="text-dark-gray fw-600 fs-24 mb-10px d-block">
                      <?php the_title() ?>
                    </span>
                    <?php echo get_field('srv_content') ?>
                    <div class="text-end">
                      <a class="btn btn-small btn-rounded btn-dark-gray popup-modal-dismiss mt-10px">Dismiss</a>
                    </div>
                  </div>
                  <?php
                endwhile;
                wp_reset_postdata();
              endif;
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="cover-background"
  style="background-image: url('<?php echo get_theme_file_uri('assets/images/decor-bg.webp') ?>')">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-xl-7 position-relative blockquote-style-02 text-center">
        <!-- start blockquote -->
        <i class="ti-quote-left text-white icon-extra-large mb-15px d-inline-block"></i>
        <h5 class="text-dark mb-20px fw-500 w-90 mx-auto">Berinvestasi dalam program pembelajaran
          dan pengembangan perusahaan adalah
          salah satu hal terbaik yang dapat dilakukan
          perusahaan mana pun. Terlepas dari lingkungan
          kerja, orang-orang di perusahaan adalah aset
          berharga dan perjalanan pembelajaran mereka
          memainkan peran penting.</h5>
        <div class="text-uppercase alt-font text-dark fw-600 fs-14 ls-1px">- Thrive to Triumph -</div>
        <!-- end blockquote -->
      </div>
    </div>
  </div>
</section>
<!-- end section -->

<!-- start section -->
<section class="bg-very-light-gray pt-3">
  <div class="container">
    <div class="row justify-content-center mb-4">
      <div class="col-lg-7 text-center"
        data-anime='{"opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
        <h5 class="alt-font text-dark-gray fw-600 ls-minus-2px">Training Programs</h5>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 justify-content-center"
      data-anime='{ "el": "childs", "rotateZ": [5, 0], "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
      <?php
      $trainingProgramArgs = [
        'post_type' => 'training_program',
        'posts_per_page' => 20,
        'orderby' => 'menu_order',
        'order' => 'ASC',
      ];
      $trainingPrograms = new WP_Query($trainingProgramArgs);
      if ($trainingPrograms->have_posts()) {
        while ($trainingPrograms->have_posts()) {
          $trainingPrograms->the_post();
          ?>
          <!-- start rotate box item -->
          <div class="col rotate-box-style-02 mb-30px">
            <div class="w-100 min-h-300px text-center rotate-box to-left">
              <!-- start front side -->
              <div
                class="w-100 h-100 overflow-hidden z-index-1 front-side bg-white border-radius-6px box-shadow-quadruple-large">
                <div class="rotate-content-front z-index-2 p-30px">
                  <?php
                  $trp_img_fr = get_field('trp_content_img_fr');
                  ?>
                  <img class="mb-25px h-70px" src="<?php echo $trp_img_fr['url']; ?>"
                    alt="<?php echo $trp_img_fr['alt']; ?>" />
                  <div class="fs-19 text-dark-gray alt-font fw-600 mb-5px"><?php the_title() ?></div>
                  <?php if (has_excerpt()) { ?>
                    <span>
                      <?php echo wp_trim_words(wp_strip_all_tags(get_field('trp_content')), 3, '...'); ?>
                    </span>
                  <?php } ?>
                </div>
              </div>
              <!-- end front side -->
              <!-- start back side -->
              <?php
              $trp_content_img_bck = get_field('trp_content_img_bck');
              ?>
              <div
                class="w-100 h-100 overflow-hidden back-side cover-background border-radius-6px box-shadow-quadruple-large"
                style="background-image:url('<?php echo $trp_content_img_bck ? $trp_content_img_bck['sizes']['training_program_image'] : 'https://placehold.co/600x520' ?>')">
                <div class="opacity-light bg-charcoal-blue"></div>
                <div
                  class="d-flex flex-column align-items-center justify-content-center h-100 z-index-2 rotate-content-back p-30px">
                  <span class="text-white alt-font fw-500 fs-19 mb-5px"><?php the_title() ?></span>
                  <?php if (has_excerpt()) { ?>
                    <p>
                      <?php echo wp_trim_words(wp_strip_all_tags(get_field('trp_content')), 3, '...'); ?>
                    </p>
                  <?php } ?>
                  <a href="#popup-modal-trp-<?php the_ID() ?>"
                    class="btn btn-medium btn-rounded with-rounded btn-base-color btn-box-shadow modal-popup">Learn
                    more<span class="bg-white text-base-color"><i class="feather icon-feather-arrow-right"></i></span></a>
                </div>
                <!-- end back side -->
              </div>
            </div>
          </div>
          <!-- end rotate box item -->
          <div id="popup-modal-trp-<?php the_ID() ?>"
            class="white-popup-block reset-for-wysiwyg mfp-hide col-xl-5 col-lg-6 col-md-7 col-11 mx-auto bg-white modal-popup-main p-50px">
            <span class="text-dark-gray fw-600 fs-24 mb-10px d-block"><?php the_title() ?></span>
            <?php echo get_field('trp_content') ?>
            <div class="text-end">
              <a class="btn btn-small btn-rounded btn-dark-gray popup-modal-dismiss mt-10px">Dismiss</a>
            </div>
          </div>
        <?php }
      }
      wp_reset_postdata();
      ?>
    </div>
  </div>
</section>
<!-- end section -->

<!-- start section -->
<?php
$about_page_args = [
  'post_type' => 'page',
  'name' => 'about' // page ID
];

$about_page = new WP_Query($about_page_args);
if ($about_page->have_posts()):
  while ($about_page->have_posts()):
    $about_page->the_post();
    $why_choose_us_img = get_field('sec_img_why_choose_us');
    ?>
    <!-- start section -->
    <section id="why-choose-us">
      <div class="container">
        <div class="row mb-6">
          <div class="col-xl-5 col-lg-6 md-mb-40px"
            data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
            <?php
            if (get_field('why_choose_us_subtitle')) {
              ?>
              <span
                class="fw-600 ls-1px fs-16 alt-font d-inline-block text-uppercase mb-5px text-base-color"><?php echo get_field('why_choose_us_subtitle') ?></span>
            <?php } ?>
            <h3 class="text-dark-gray fw-600 ls-minus-2px mb-15px"><?php echo get_field('why_choose_us_title') ?></h3>
            <div class="accordion accordion-style-02" id="accordion-style-02" data-active-icon="fa-angle-down"
              data-inactive-icon="fa-angle-right">
              <?php
              if (have_rows('why_choose_us')):
                $why_choose_us_counter = 1;
                while (have_rows('why_choose_us')):
                  the_row();
                  ?>
                  <!-- start accordion item -->
                  <div class="accordion-item <?php if ($why_choose_us_counter === 1) {
                    echo 'active-accordion';
                  } ?>">
                    <div class="accordion-header border-bottom border-color-extra-medium-gray">
                      <a href="#" data-bs-toggle="collapse"
                        data-bs-target="#accordion-style-02-<?php echo $why_choose_us_counter ?>" aria-expanded="true"
                        data-bs-parent="#accordion-style-02">
                        <div class="accordion-title mb-0 position-relative text-dark-gray">
                          <i class="fa-solid fa-angle-down icon-small"></i><span
                            class="fs-20 fw-600"><?php echo get_sub_field('why_choose_us_title') ?></span>
                        </div>
                      </a>
                    </div>
                    <div id="accordion-style-02-<?php echo $why_choose_us_counter ?>" class="accordion-collapse collapse <?php if ($why_choose_us_counter === 1) {
                         echo 'show';
                       } ?>" data-bs-parent="#accordion-style-02">
                      <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                        <p><?php echo get_sub_field('why_choose_us_content') ?></p>
                      </div>
                    </div>
                  </div>
                  <!-- end accordion item -->
                  <?php
                  $why_choose_us_counter++;
                endwhile;
                wp_reset_postdata();
              endif;
              ?>
            </div>
          </div>
          <div class="col-lg-6 offset-xl-1 position-relative z-index-1"
            data-anime='{ "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="atropos" data-atropos data-atropos-perspective="2450">
              <div class="atropos-scale">
                <div class="atropos-rotate">
                  <div class="atropos-inner">
                    <img
                      src="<?php echo $why_choose_us_img ? $why_choose_us_img['sizes']['section_image2'] : 'https://placehold.co/960x762' ?>"
                      alt="" class="w-100 border-radius-6px" />
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="absolute-middle-center text-white-space-nowrap z-index-9">
              <a href="#"
                class="btn btn-extra-large btn-white left-icon btn-box-shadow fw-600 btn-rounded popup-youtube ls-minus-05px"><i
                  class="fa-brands fa-youtube icon-small"></i>How it works</a>
            </div> -->
          </div>
        </div>
        <div class="row justify-content-center"
          data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
          <div class="col-12 fs-22 fw-500 ls-minus-1px text-dark-gray text-center">
            Save Time and Effort with Proven Solutions. <a class="text-dark-gray text-decoration-line-bottom d-inline-block"
              href="<?php echo esc_url(site_url('contact')) ?>">Contact
              us now</a>
          </div>
        </div>
      </div>
    </section>
    <!-- end section -->
    <?php
  endwhile;
  wp_reset_postdata();
endif;
?>

<!-- start section -->
<?php
$sec_testimonial_img = get_theme_mod('set_home_testimonial_image');
$sec_testimonial_img_url = wp_get_attachment_image_url($sec_testimonial_img, 'section_image1');
$sec_testimonial_img_alt = get_post_meta($sec_testimonial_img, '_wp_attachment_image_alt', true);
?>
<section id="testimonial" class="bg-very-light-gray background-position-right-top background-no-repeat"
  style="background-image: url('<?php echo get_theme_file_uri('assets/images/map-indo-sketch.png') ?>')">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-6 col-md-10 contact-form-style-03 md-mb-50px sm-mb-30px"
        data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
        <figure class="position-relative m-0">
          <img class="border-radius-15px w-100" src="<?php if ($sec_testimonial_img_url) {
            echo $sec_testimonial_img_url;
          } else {
            echo 'https://placehold.co/600x600';
          } ?>" alt="<?php echo $sec_testimonial_img_alt ?>">
          <figcaption
            class="position-absolute text-center border-radius-15px right-30px bottom-30px ps-30px pe-30px blur-box bg-white-transparent">
            <h3 class="fs-60 mx-auto mb-0 fw-600 text-dark-gray mt-20px">4.9</h2>
              <div class="text-base-color ls-2px lh-20">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                  class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <span class="text-dark-gray mb-20px d-inline-block">Verified score</span>
          </figcaption>
        </figure>
      </div>
      <div class="col-lg-5 offset-lg-1 col-md-10 text-center text-lg-start"
        data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 100, "easing": "easeOutQuad" }'>
        <?php if (get_theme_mod('set_home_testimonial_subtitle')): ?>
          <span
            class="fs-20 fw-500 text-base-color d-block mb-20px"><?php echo get_theme_mod('set_home_testimonial_subtitle') ?></span>
        <?php endif; ?>
        <h3 class="fw-600 text-dark-gray ls-minus-2px mb-35px"><?php echo get_theme_mod('set_home_testimonial_title') ?>
        </h3>
        <div class="swiper position-relative magic-cursor"
          data-slider-options='{ "autoHeight": true, "loop": true, "allowTouchMove": true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "effect": "fade" }'>
          <div class="swiper-wrapper mb-50px lg-mb-35px">
            <?php
            $latestTestimonialsArgs = [
              'post_type' => 'testimonial',
              'posts_per_page' => get_theme_mod('set_home_testimonial_max_post', 10),
              'orderby' => 'date',
              'order' => 'DESC',
            ];
            $latestTestimonials = new WP_Query($latestTestimonialsArgs);
            if ($latestTestimonials->have_posts()):
              while ($latestTestimonials->have_posts()):
                $latestTestimonials->the_post();
                ?>
                <!-- start text slider item -->
                <div class="swiper-slide review-style-08">
                  <?php if (get_field('testimony_is_using_existing_client_or_not')):
                    $client_data = get_field('testimony_related_client');
                    $testimony_client_img = get_field('client_logo', $client_data->ID);
                    ?>
                    <a href="<?php echo get_the_permalink($client_data->ID); ?>"><img
                        src="<?php echo $testimony_client_img['url']; ?>" class="h-40px mb-15px d-block sm-mx-auto"
                        alt="<?php echo $testimony_client_img['alt']; ?>"></a>
                  <?php else: ?>
                    <span
                      class="d-block fs-30 lh-24 mb-5 text-dark-gray fw-600"><?php echo get_field('other_client_name') ?></span>
                  <?php endif; ?>
                  <p class="fs-18"><?php echo get_field('testimony_msg') ?></p>
                  <div class="mt-20px">
                    <div class="d-inline-block align-middle text-start">
                      <span class="d-block fs-20 lh-24 text-dark-gray fw-600"><?php the_title() ?></span>
                      <span><?php echo get_field('client_role') ?></span>
                    </div>
                  </div>
                </div>
                <!-- end text slider item -->
                <?php
              endwhile;
              wp_reset_postdata();
            endif;
            ?>
          </div>
        </div>
        <div class="d-flex justify-content-center justify-content-lg-start">
          <!-- start slider navigation -->
          <div
            class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 bg-white text-dark-gray box-shadow-medium">
            <i class="fa-solid fa-arrow-left icon-small text-dark-gray"></i>
          </div>
          <div
            class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 bg-white text-dark-gray box-shadow-medium">
            <i class="fa-solid fa-arrow-right icon-small text-dark-gray"></i>
          </div>
          <!-- end slider navigation -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end section -->
<?php
get_footer();
?>