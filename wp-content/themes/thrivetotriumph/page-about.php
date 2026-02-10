<?php
get_header();
while (have_posts()) {
  the_post();
  ?>
  <!-- start page title -->
  <?php get_template_part('template-parts/partials/content', 'page-header') ?>
  <!-- end page title -->
  <!-- start section -->
  <section>
    <div class="container position-relative">
      <!-- start dropcaps item -->
      <div class="row justify-content-center">
        <div class="col-12 position-relative dropcap-style-05 last-paragraph-no-margin">
          <div class="text-w-image__container">
            <?php
            $about_sec_image = get_field('about_sec_image');
            $ext_vid_url = get_field('comp_profile_video_url');
            ?>
            <div class="text-w-image__image-wrapper sm-mb-30px mb-15px"
              data-anime='{ "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
              <figure class="position-relative mb-0 border-radius-6px overflow-hidden">
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
              </figure>
            </div>
            <div class="text-w-image__content"
              data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
              <?php
              if (get_field('about_sec_subtitle')) {
                ?>
                <span
                  class="fw-600 ls-1px fs-16 alt-font d-inline-block text-uppercase mb-5px text-base-color"><?php echo get_field('about_sec_subtitle') ?></span>
              <?php } ?>
              <h3 class="fw-600 text-dark-gray ls-minus-2px"><?php echo get_field('about_sec_title') ?>
              </h3>
              <p><span class="text-dark-gray opacity-5"><?php esc_html(the_content()) ?></span></p>
            </div>
          </div>
        </div>
      </div>
      <!-- end dropcaps item -->
      <?php if (get_field('comp_profile_doc')) { ?>
        <div class="row mt-5 sm-mt-30px"
          data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 600, "staggervalue": 300, "easing": "easeOutQuad" }'>
          <div class="col-12 text-center">
            <a href="<?php echo get_field('comp_profile_doc') ?>"
              class="d-inline-block bg-dark-gray fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 me-10px sm-m-10px">
              Download</a>
            <div class="d-inline-block align-middle"><span
                class="fs-24 alt-font text-dark-gray d-block fw-600 ls-minus-1px mb-0">Download our company profile</span>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </section>
  <!-- end section -->

  <!-- start section -->
  <section class="bg-very-light-gray pt-3">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-10"
          data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
          <div class="row justify-content-center mb-4">
            <div class="col-lg-7 text-center"
              data-anime='{"opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
              <span class="fw-600 ls-1px fs-16 alt-font d-inline-block text-uppercase mb-5px text-base-color">
                The values that guide every decision we make
              </span>
              <h3 class="text-dark-gray fw-600 ls-minus-2px mb-50px">
                Business Philosophy
              </h3>
            </div>
          </div>
          <?php
          if (have_rows('bs_phy')):
            $bhs_phy_counter = 1;
            while (have_rows('bs_phy')):
              the_row();
              ?>
              <div
                class="row align-items-center <?php echo ($bhs_phy_counter < count(get_field('bs_phy'))) ? 'border-bottom border-2 border-color-dark-gray pb-50px mb-50px sm-pb-35px sm-mb-35px' : '' ?>">
                <div class="col-md-1 text-center text-md-end md-mb-15px">
                  <div class="fs-16 fw-600 text-dark-gray"><?php echo $bhs_phy_counter ?></div>
                </div>
                <div class="col-md-11 icon-with-text-style-01 md-mb-25px">
                  <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                    <div class="feature-box-icon me-50px md-me-35px">
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
                    <div class="feature-box-content">
                      <span
                        class="d-inline-block fw-500 text-dark-gray mb-5px fs-20 ls-minus-05px"><?php echo get_sub_field('bs_phy_title') ?></span>
                      <p class="w-90 md-w-100"><?php echo get_sub_field('bs_phy_content') ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              $bhs_phy_counter++;
            endwhile;
          endif;
          ?>
        </div>
      </div>
    </div>
  </section>
  <!-- end section -->
  <!-- start section -->
  <?php
  $coachArgs = [
    'post_type' => 'coach',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC',
  ];
  $coaches = new WP_Query($coachArgs);
  ?>
  <section class="background-repeat position-relative overflow-hidden"
    style="background-image:url('images/demo-spa-salon-home-bg-01.jpg');">
    <div class="position-absolute right-minus-100px bottom-100px d-none d-xl-inline-block"
      data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)">
      <img src="<?php echo get_theme_file_uri('assets/images/team-bg.webp'); ?>" alt="additional image"
        class="opacity-5" />
    </div>
    <div class="container">
      <div class="row justify-content-center mb-4">
        <div class="col-lg-7 text-center"
          data-anime='{"opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
          <span class="fw-600 ls-1px fs-16 alt-font d-inline-block text-uppercase mb-5px text-base-color">
            Meet our team
          </span>
          <h3 class="text-dark-gray fw-600 ls-minus-2px mb-50px">
            Proffesional Team
          </h3>
        </div>
      </div>
      <div class="row-grid row-grid--4 gap-half-3 justify-content-center"
        data-anime='{ "el": "childs", "perspective": [900, 1200], "scaleY": [1.1, 1], "rotateY": [-30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
        <?php
        if ($coaches->have_posts()) {
          while ($coaches->have_posts()) {
            $coaches->the_post();
            $coach_image = get_field('coach_content_img');
            $coach_name = get_field('');
            $coach_role = get_field('coach_role');
            $coach_role_text = get_field('coach_role_text');

            // Sosmed URLS
            $coach_fb_url = get_field('coach_fb_url');
            $coach_insta_url = get_field('coach_insta_url');
            $coach_linkedin_url = get_field('coach_linkedin_url');

            if ($coach_role['value'] === 'founder' || $coach_role['value'] === 'co-founder') {
              $coach_role_text = $coach_role['label'];
            }
            ?>
            <!-- start team member item -->
            <div class="col-grid team-style-06 mb-30px">
              <div
                class="d-flex flex-column p-40px pb-20px lg-p-30px text-center border-radius-6px bg-white box-shadow-quadruple-large position-relative">
                <div class="position-relative">
                  <img class="rounded-circle w-150px h-150px mb-20px" src="<?php echo $coach_image ? $coach_image['sizes']['large'] : 'https://placehold.co/200x200' ?>"
                  alt="<?php echo $coach_image['alt'] ?>" />
                </div>
                <h4 class="text-dark-gray fs-18 fw-600 mb-5px"><?php the_title() ?></h4>
                <p class="w-90 mx-auto lh-28"><?php echo $coach_role_text ?></p>
                <div
                  class="text-center elements-social social-icon-style-02 border-top border-color-light-medium-gray w-100 pt-15px">
                  <ul class="small-icon dark">
                    <li class="m-0">
                      <a class="text-base-color-hover" rel="noopener noreferrer" href="<?php if ($coach_fb_url) {
                        echo $coach_fb_url;
                      } else {
                        echo '#';
                      } ?>" target="_blank"><i class="fa-brands fa-facebook-f icon-small"></i></a>
                    </li>
                    <li class="m-0">
                      <a class="text-base-color-hover" rel="noopener noreferrer" href="<?php if ($coach_insta_url) {
                        echo $coach_insta_url;
                      } else {
                        echo '#';
                      } ?>" target="_blank"><i class="fa-brands fa-instagram icon-small"></i></a>
                    </li>
                    <li class="m-0">
                      <a class="text-base-color-hover" rel="noopener noreferrer" href="<?php if ($coach_linkedin_url) {
                        echo $coach_linkedin_url;
                      } else {
                        echo '#';
                      } ?>" target="_blank"><i class="fa-brands fa-linkedin-in icon-small"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- end team member item -->
          <?php }
        }
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </section>
  <!-- end section -->
  <?php
}
get_footer(); ?>