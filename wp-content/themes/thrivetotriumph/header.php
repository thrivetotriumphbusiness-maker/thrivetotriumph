<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
  <!--
     _____ _          _             _          _____    _                       _     
|_   _| |        (_)           | |        |_   _|  (_)                     | |    
  | | | |__  _ __ ___   _____  | |_ ___     | |_ __ _ _   _ _ __ ___  _ __ | |__  
  | | | '_ \| '__| \ \ / / _ \ | __/ _ \    | | '__| | | | | '_ ` _ \| '_ \| '_ \ 
  | | | | | | |  | |\ V /  __/ | || (_) |   | | |  | | |_| | | | | | | |_) | | | |
  \_/ |_| |_|_|  |_| \_/ \___|  \__\___/    \_/_|  |_|\__,_|_| |_| |_| .__/|_| |_|
                                                                     | |          
                                                                     |_|          
  -->
  <!-- 
  I’m Albar, a professional web developer with over 10 years of experience. 
  Feel free to reach out through any of the contact options below for collaboration opportunities.

  email: business@moh-albar.my.id or albar@comintel-tp.com	| Professional Web Developer | Odoo Developer  
  -->

  <meta charset="<?php bloginfo('charset') ?>" />
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <!-- favicon icon -->
  <!-- <link rel="shortcut icon" href="images/favicon.png"> -->
  <!-- <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png"> -->
  <!-- google fonts preconnect -->
  <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
</head>

<?php
if (!function_exists('wp_body_open')) {
  function wp_body_open()
  {
    do_action('wp_body_open');
  }
}
?>

<body <?php body_class(); ?> data-mobile-nav-style="classic">
  <?php wp_body_open() ?>

  <!-- start header -->
  <header class="header-with-topbar">
    <!-- start header top bar -->
    <div class="header-top-bar top-bar-dark bg-very-light-gray">
      <div class="container-fluid">
        <div class="row h-45px xs-h-auto align-items-center m-0 xs-pt-5px xs-pb-5px">
          <div class="col-lg-6 col-md-7 text-center text-md-start xs-px-0">
            <div class="fs-15 text-dark-gray fw-500">Our training experts waiting for you! <a
                href="<?php echo esc_url(site_url('contact')) ?>"
                class="text-dark-gray text-decoration-line-bottom fw-600">Contact
                now</a></div>
          </div>
          <div class="col-lg-6 col-md-5 text-end d-none d-md-flex">
            <div class="widget fs-15 fw-500 me-35px lg-me-25px md-me-0 text-dark-gray"><a href="tel:<?php the_field('comp_phone_number', 'option'); ?>"><i
                  class="feather icon-feather-phone-call"></i><?php the_field('comp_phone_number', 'option'); ?></a></div>
            <div class="widget fs-15 fw-500 text-dark-gray d-none d-lg-inline-block"><i
                class="feather icon-feather-map-pin"></i><?php echo wp_trim_words(get_field('comp_address', 'option'), 8); ?></div>
          </div>
        </div>
      </div>
    </div>
    <!-- end header top bar -->
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg header-light bg-white responsive-sticky">
      <div class="container-fluid">
        <div class="col-auto col-lg-2 me-lg-0 me-auto">
          <a class="navbar-brand" href="<?php echo esc_url(home_url()) ?>">
            <img src="<?php echo get_theme_file_uri('assets/images/thrive_logo_black.webp') ?>"
              data-at2x="<?php echo get_theme_file_uri('assets/images/thrive_logo_black.webp') ?>" alt=""
              class="default-logo">
            <img src="<?php echo get_theme_file_uri('assets/images/thrive_logo_black.webp') ?>"
              data-at2x="<?php echo get_theme_file_uri('assets/images/thrive_logo_black.webp') ?>" alt=""
              class="alt-logo">
            <img src="<?php echo get_theme_file_uri('assets/images/thrive_logo_black.webp') ?>"
              data-at2x="<?php echo get_theme_file_uri('assets/images/thrive_logo_black.webp') ?>" alt=""
              class="mobile-logo">
          </a>
        </div>
        <div class="col-auto menu-order position-static">
          <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-label="Toggle navigation">
            <span class="navbar-toggler-line"></span>
            <span class="navbar-toggler-line"></span>
            <span class="navbar-toggler-line"></span>
            <span class="navbar-toggler-line"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav fw-600">
              <li class="nav-item <?php if (is_front_page()) echo "active" ?>"><a href="<?php echo esc_url(site_url('/')); ?>" class="nav-link">Home</a></li>
              <li class="nav-item <?php if (is_page('about')) echo "active" ?>"><a href="<?php echo esc_url(site_url('about')); ?>" class="nav-link">About</a></li>
              <li class="nav-item"><a href="<?php echo esc_url(site_url('/')); ?>" data-target="service"
                  class="nav-link inner-link">Services</a></li>
              <!-- <li class="nav-item"><a href="<?php echo esc_url(site_url('/')); ?>" data-target="why-choose-us"
                  class="nav-link inner-link">Why Choose Us</a></li> -->
              <li class="nav-item <?php if (is_page('clients')) echo "active" ?>"><a href="<?php echo esc_url(site_url('/client')); ?>" class="nav-link">Clients</a>
              </li>
              <!-- <li class="nav-item"><a href="<?php echo esc_url(site_url('/')); ?>" data-target="testimonial"
                  class="nav-link inner-link">Testimonials</a></li> -->
              <li class="nav-item <?php if (is_page('contact')) echo "active" ?>"><a href="<?php echo esc_url(site_url('contact')); ?>" class="nav-link">Contact</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-auto col-lg-2 text-end d-none d-sm-flex">
          <div class="header-icon">
            <div class="header-button">
              <a href="<?php echo esc_url(site_url('contact')) ?>"
                class="btn btn-small btn-rounded btn-base-color btn-box-shadow">Let's discuss</a>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- end navigation -->
  </header>
  <!-- end header -->