<?php
get_header();
while (have_posts()) {
  the_post();
  ?>
  <!-- start page title -->
  <?php get_template_part('template-parts/partials/content', 'page-header') ?>
  <!-- end page title -->
  <!-- start section -->
  <section class="ps-12 pe-12 xl-ps-10 xl-pe-10 lg-ps-3 lg-pe-3 half-section" id="down-section">
    <div class="container-fluid">
      <div class="row row-cols-1 row-cols-lg-4 row-cols-md-4 row-cols-sm-2 clients-style-04"
        data-anime='{ "el": "childs", "scale": [0,1], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
        <?php
        $clientArgs = [
          'post_type' => 'client',
          'posts_per_page' => 20,
          'orderby' => 'menu_order',
          'order' => 'ASC',
        ];
        $clients = new WP_Query($clientArgs);
        $client_amount = $clients->found_posts;
        $row_amount_col4 = ceil($client_amount / 4);
        $last_row = $client_amount - 4;
        $two_last_row = $client_amount - 2;
        if ($clients->have_posts()):
          $counter = 1;
          $counter_row_4 = 1;
          while ($clients->have_posts()):
            $clients->the_post();
            $client_img = get_field('client_logo');
            ?>
            <!-- start client item -->
            <div
              class="col text-center <?php echo $counter % 4 !== 0 && $counter !== $client_amount ? 'border-end' : '' ?> <?php echo $counter_row_4 < $row_amount_col4 ? 'border-bottom' : ($counter !== $client_amount ? 'xs-border-bottom' : '') ?>  border-color-light-medium-gray <?php echo $counter % 2 === 0 ? 'sm-border-end-0' : 'xs-border-end-0' ?> transition-inner-all pt-7 pb-7 ps-5 pe-5 sm-pt-12 sm-pb-12">
              <a href="#"><img src="<?php echo $client_img['url']; ?>" class="h-50px md-h-30px sm-h-40px"
                  alt="<?php echo $client_img['alt']; ?>"></a>
            </div>
            <!-- end client item -->
            <?php
            if ($counter % 4 === 0) {
              $counter_row_4++;
            }
            $counter++;
          endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </div>
    </div>
  </section>
  <!-- end section -->
  <!-- start section -->
  <section class="bg-very-light-gray overflow-hidden xs-pb-20px">
    <div class="container-fluid">
      <div class="row justify-content-center mb-2">
        <div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 text-center"
          data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
          <?php if (get_theme_mod('set_home_testimonial_subtitle')): ?>
            <span class="fs-20 fw-500 text-base-color d-block mb-20px">
              <?php echo get_theme_mod('set_home_testimonial_subtitle') ?>
            </span>
          <?php endif; ?>
          <h3 class="fw-600 text-dark-gray ls-minus-2px mb-35px">
            <?php echo get_theme_mod('set_home_testimonial_title') ?>
          </h3>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-12 position-relative"
          data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
          <div class="swiper slider-three-slide swiper-initialized swiper-horizontal magic-cursor"
            data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loopedSlides": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": true, "dynamicBullets": false }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
            <div class="swiper-wrapper pt-30px pb-30px">
              <div class="swiper-slide review-style-04 d-none d-lg-block h-auto"></div>
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
                  <!-- start review item -->
                  <div class="swiper-slide review-style-04">
                    <div
                      class="d-flex justify-content-center h-100 flex-column bg-white border-radius-6px p-15 xl-p-12 box-shadow-extra-large">
                      <?php if (get_field('testimony_is_using_existing_client_or_not')):
                        $client_data = get_field('testimony_related_client');
                        $testimony_client_img = get_field('client_logo', $client_data->ID);
                        // echo get_the_permalink($client_data->ID);
                        ?>
                        <a href="#"><img src="<?php echo $testimony_client_img['url']; ?>"
                            class="h-40px mb-15px d-block sm-mx-auto" alt="<?php echo $testimony_client_img['alt']; ?>"></a>
                      <?php else: ?>
                        <span class="d-block fs-20 lh-24 mb-5 text-dark-gray fw-600">
                          <?php echo get_field('other_client_name') ?>
                        </span>
                      <?php endif; ?>
                      <p class="mb-20px"><?php echo get_field('testimony_msg') ?></p>
                      <div class="mt-5px d-flex align-items-center">
                        <div class="d-inline-block align-middle">
                          <div class="text-dark-gray fw-500 alt-font"><?php the_title() ?></div>
                          <div class="lh-20 fs-16"><?php echo get_field('client_role') ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end review item -->
                  <?php
                endwhile;
                wp_reset_postdata();
              endif;
              ?>
              <div class="swiper-slide review-style-04 d-none d-lg-block h-auto"></div>
            </div>
            <!-- start slider pagination -->
            <!--<div class="swiper-pagination slider-four-slide-pagination-2 swiper-pagination-style-2 swiper-pagination-clickable swiper-pagination-bullets"></div>-->
            <!-- end slider pagination -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end section -->
  <?php
}
get_footer(); ?>