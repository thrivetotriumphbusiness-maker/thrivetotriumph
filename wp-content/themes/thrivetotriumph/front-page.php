<?php
get_header();
?>
<!-- start banner -->
<section
  class="sec-banner  p-0 full-screen md-h-600px sm-h-600px background-position-center-top position-relative lg-overflow-hidden"
  style="background-image: url('<?php echo get_theme_file_uri('assets/images/bg-dot.svg') ?>')">
  <div class="bg-gradient-black-green position-absolute left-0px top-0px h-100 w-100 z-index-minus-1"></div>
  <div class="container h-100">
    <?php
    $set_home_header_secondary_text = get_theme_mod('set_home_header_secondary_text');
    $text_data = [];
    if ($set_home_header_secondary_text) {
      foreach ($set_home_header_secondary_text as $item) {
        array_push($text_data, $item['secondary_text']);
      }
    }
    ?>
    <div class="row align-items-center h-100">
      <div class="col-lg-6 col-md-9 position-relative z-index-1 d-flex flex-column justify-content-center h-100">
        <div class="fs-120 lg-fs-100 text-dark-gray lh-100 fw-500 mb-6 ls-minus-5px fancy-text-style-4"
          data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-100, 0], "staggervalue": 300, "duration": 1000, "easing": "easeOutCubic" }'>
          <h1 class="d-inline-block fs-70 mb-0 ls-minus-5px"><?php echo get_theme_mod('set_home_header_title') ?></h1>
          <h2 class="fw-700 d-inline-block mb-0 fs-120" data-fancy-text='{ "effect": "wave", "string": <?php if ($text_data) {
            echo json_encode($text_data);
          } else {
            echo '';
          } ?>, "duration": 4000 }'></h2>
        </div>
        <div class="fs-20 lh-34 xs-fs-19 mb-35px xs-mb-20px w-85 lg-w-95 sm-w-100 ls-minus-05px"
          data-anime='{ "opacity": [0, 1], "translateX": [-100, 0], "duration": 1000, "delay": 1000, "easing": "easeOutCubic" }'>
          <?php echo get_theme_mod('set_home_header_desc') ?></div>
        <div
          data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-100, 0], "staggervalue": -200, "duration": 1000, "delay": 1500, "easing": "easeOutCubic" }'>
          <a href="#about"
            class="btn btn-extra-large btn-base-color btn-hover-animation-switch btn-round-edge btn-box-shadow me-20px fw-400 xs-mt-10px xs-mb-10px inner-link">
            <span>
              <span class="btn-text">Discover More</span>
              <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
              <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
            </span>
          </a>
        </div>
        <div
          class="row w-100 position-absolute md-position-relative bottom-0 mb-14 md-mb-0 md-mt-40px sm-mt-30px xs-mt-20px align-items-center"
          data-anime='{ "el": "childs", "opacity": [0, 1], "staggervalue": -200, "translateX": [-100, 0], "duration": 1000, "delay": 1700, "easing": "easeOutQuad" }'>
          <div class="col-6 col-md-4 icon-with-text-style-08 xs-mb-15px">
            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
              <div
                class="feature-box-icon feature-box-icon-rounded w-30px h-30px rounded-circle bg-jungle-green me-10px">
                <i class="fa-solid fa-check text-white fs-12"></i>
              </div>
              <div class="feature-box-content last-paragraph-no-margin">
                <span class="d-inline-block fs-14 fw-500 text-dark-gray">Knowledge</span>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4 icon-with-text-style-08 xs-mb-15px">
            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
              <div
                class="feature-box-icon feature-box-icon-rounded w-30px h-30px rounded-circle bg-jungle-green me-10px">
                <i class="fa-solid fa-check text-white fs-12"></i>
              </div>
              <div class="feature-box-content last-paragraph-no-margin">
                <span class="d-inline-block fs-14 fw-500 text-dark-gray">Transformation</span>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4 icon-with-text-style-08">
            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
              <div
                class="feature-box-icon feature-box-icon-rounded w-30px h-30px rounded-circle bg-jungle-green me-10px">
                <i class="fa-solid fa-check text-white fs-12"></i>
              </div>
              <div class="feature-box-content last-paragraph-no-margin">
                <span class="d-inline-block fs-14 fw-500 text-dark-gray">Growth</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 offset-lg-1 col-md-3 align-self-end d-none d-md-inline-block">
        <div
          class="position-absolute right-0px bottom-minus-90px xxl-bottom-minus-30px md-bottom-minus-35px md-right-minus-250px lg-right-minus-150px w-50 xl-w-55 lg-w-65 md-w-75 overflow-hidden">
          <img src="<?php echo get_theme_file_uri('assets/images/thrive-home-graph-bg.webp') ?>" class="w-100" alt=""
            data-anime='{ "opacity": [0, 1], "translateX": [100, 0], "duration": 1000, "delay": 200, "easing": "easeOutQuad" }'>
        </div>
        <div
          class="position-absolute right-0px top-0 me-3 mt-20 md-mt-45 lg-w-250px lg-mt-45 animation-float overflow-hidden d-none d-lg-inline-block"
          data-bottom-top="transform: translateY(-30px)" data-top-bottom="transform: translateY(80px)">
          <img src="images/demo-marketing-home-02.jpg" class="border-radius-6px box-shadow-quadruple-large" alt=""
            data-anime='{ "opacity": [0, 1], "clipPath": ["inset(0 0 200px 0)", "inset(0px 0px 0px 0px)"], "duration": 1000, "delay": 1000, "easing": "easeOutQuad" }'>
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
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center"
          data-anime='{ "el": "childs", "rotateZ": [5, 0], "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
          <?php
          if (have_rows('bs_phy')):
            $bhs_phy_counter = 1;
            while (have_rows('bs_phy')):
              the_row();
              ?>
              <!-- start features box item -->
              <div class="col icon-with-text-style-01 mb-50px sm-mb-40px">
                <div class="feature-box d-flex flex-row justify-content-start last-paragraph-no-margin">
                  <div class="feature-box-icon">
                    <?php if (get_sub_field('bs_phy__is_using_image_or_icon') === 'icon') { ?>
                      <i class="<?php echo get_sub_field('bs_phy_content_icon') ?> icon-extra-large text-base-color"></i>
                    <?php } ?>
                    <?php if (get_sub_field('bs_phy__is_using_image_or_icon') === 'image') {
                      $bhs_phy_img = get_sub_field('bs_phy_content_img');
                      // var_dump($srv_img);
                      ?>
                      <img width="80" height="80" src="<?php echo $bhs_phy_img['url']; ?>"
                        alt="<?php echo $bhs_phy_img['alt']; ?>" />
                    <?php } ?>
                  </div>
                  <div class="feature-box-content text-start" style="padding-left: 20px;">
                    <span
                      class="d-inline-block alt-font text-dark-gray fw-600 mb-5px fs-20"><?php echo get_sub_field('bs_phy_title') ?></span>
                    <p class="w-90 md-w-100"><?php echo wp_trim_words(get_sub_field('bs_phy_content'), 7, '...'); ?></p>
                    <a href="#popup-modal-<?php the_ID() ?>-<?php echo $bhs_phy_counter ?>"
                      class="btn btn-link btn-large text-base-color thin fw-600 modal-popup">Learn More</a>
                  </div>
                </div>
              </div>
              <div id="popup-modal-<?php the_ID() ?>-<?php echo $bhs_phy_counter ?>"
                class="white-popup-block mfp-hide col-xl-5 col-lg-6 col-md-7 col-11 mx-auto bg-white text-center modal-popup-main p-50px">
                <span class="text-dark-gray fw-600 fs-24 mb-10px d-block"><?php echo get_sub_field('bs_phy_title') ?></span>
                <p><?php echo get_sub_field('bs_phy_content') ?></p>
                <a class="btn btn-small btn-rounded btn-dark-gray popup-modal-dismiss mt-10px" href="#">Dismiss</a>
              </div>
              <!-- end features box item -->
              <?php
              $bhs_phy_counter++;
            endwhile;
          endif;
          ?>
        </div>
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
            <p class="w-90 lg-w-100 md-mx-auto mb-35px"><?php echo apply_filters('the_content', get_the_content(null, false));
            ?></p>
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
            'posts_per_page' => 30,
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
<section class="bg-very-light-gray" id="service">
  <div class="container">
    <div class="row justify-content-center mb-4">
      <div class="col-lg-7 text-center"
        data-anime='{"opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
        <span class="fw-600 ls-1px fs-16 alt-font d-inline-block text-uppercase mb-5px text-base-color">Innovative
          solutions</span>
        <h3 class="alt-font text-dark-gray fw-600 ls-minus-2px">Consulting services</h3>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center"
      data-anime='{ "el": "childs", "willchange": "transform", "scale": [0.9, 1], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 200, "easing": "easeOutQuad" }'>
      <?php
      $serviceArgs = [
        'post_type' => 'service',
        'posts_per_page' => 10,
        'orderby' => 'menu_order',
        'order' => 'ASC',
      ];
      $services = new WP_Query($serviceArgs);
      if ($services->have_posts()) {
        while ($services->have_posts()) {
          $services->the_post();
          $is_using_image_or_icon = get_field('is_using_image_or_icon');
          ?>
          <!-- start features box item -->
          <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
            <div
              class="feature-box h-100 justify-content-start border-radius-5px bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover p-18 md-p-16 last-paragraph-no-margin">
              <div class="feature-box-icon">
                <?php if ($is_using_image_or_icon === 'icon') { ?>
                  <a href="#popup-modal-<?php the_ID() ?>" class="modal-popup"><i
                      class="<?php echo get_field('srv_content_icon') ?> icon-double-large text-base-color mb-25px"></i></a>
                <?php } ?>
                <?php if ($is_using_image_or_icon === 'image') {
                  $srv_img = get_field('srv_content_img');
                  // var_dump($srv_img);
                  ?>
                  <a href="#popup-modal-<?php the_ID() ?>" class="modal-popup">
                    <img class="mb-25px" width="80" height="80" src="<?php echo $srv_img['url']; ?>"
                      alt="<?php echo $srv_img['alt']; ?>" />
                  </a>
                <?php } ?>
              </div>
              <div class="feature-box-content">
                <a href="#popup-modal-<?php the_ID() ?>"
                  class="d-inline-block alt-font text-dark-gray fw-600 mb-5px fs-20 modal-popup"><?php the_title() ?></a>
                <p><?php echo wp_trim_words(get_field('srv_content'), 5, '...'); ?></p>
              </div>

              <div id="popup-modal-<?php the_ID() ?>"
                class="white-popup-block mfp-hide col-xl-5 col-lg-6 col-md-7 col-11 mx-auto bg-white text-center modal-popup-main p-50px">
                <span class="text-dark-gray fw-600 fs-24 mb-10px d-block"><?php the_title() ?></span>
                <p><?php echo get_field('srv_content') ?></p>
                <a class="btn btn-small btn-rounded btn-dark-gray popup-modal-dismiss mt-10px" href="#">Dismiss</a>
              </div>
            </div>
          </div>
          <!-- end features box item -->
        <?php }
      }
      wp_reset_postdata();
      ?>
    </div>
    <div class="row mt-6"
      data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 100, "easing": "easeOutQuad" }'>
      <div class="col-12 text-center">
        <h6 class="text-dark-gray ls-minus-1px lh-inherit m-0">Our <span
            class="fw-600 text-decoration-line-bottom-medium">committed services</span> are ready to help!</h6>
      </div>
    </div>
  </div>
</section>
<!-- end section -->
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
                class="fw-600 ls-1px fs-16 alt-font d-inline-block text-uppercase mb-5px text-ternary-color"><?php echo get_field('why_choose_us_subtitle') ?></span>
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
            Save Time and Effort with Proven Solutions. <a
              class="text-dark-gray text-decoration-line-bottom d-inline-block" href="<?php echo esc_url(site_url('contact')) ?>">Contact
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
          } ?>" alt="">
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
                    <a href="#"><img src="<?php echo $testimony_client_img['url']; ?>"
                        class="h-40px mb-15px d-block sm-mx-auto" alt="<?php echo $testimony_client_img['alt']; ?>"></a>
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