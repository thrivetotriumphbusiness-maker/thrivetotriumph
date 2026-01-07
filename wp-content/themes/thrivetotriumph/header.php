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
  If you look inside, you’ll probably be wondering who the handsome developer behind this is, right? 😜.
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
  <header>
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg header-light header-transparent bg-transparent disable-fixed">
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
            <ul class="navbar-nav">
              <li class="nav-item"><a href="<?php echo esc_url(site_url('/')); ?>" data-target="about"
                  class="nav-link inner-link">About</a></li>
              <li class="nav-item"><a href="<?php echo esc_url(site_url('/')); ?>" data-target="client"
                  class="nav-link inner-link">Clients</a></li>
              <li class="nav-item"><a href="<?php echo esc_url(site_url('/')); ?>" data-target="service"
                  class="nav-link inner-link">Services</a></li>
              <li class="nav-item"><a href="<?php echo esc_url(site_url('/')); ?>" data-target="why-choose-us"
                  class="nav-link inner-link">Why Choose Us</a></li>
              <li class="nav-item"><a href="<?php echo esc_url(site_url('/')); ?>" data-target="testimonial"
                  class="nav-link inner-link">Testimonials</a></li>
              <li class="nav-item"><a href="<?php echo esc_url(site_url('contact')); ?>" class="nav-link">Contact</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-auto col-lg-2 text-end">
          <div class="header-icon">
            <div class="header-social-icon icon">
              <?php if (have_rows('comp_sosmed_links', 'option')) {
                while (have_rows('comp_sosmed_links', 'option')) {
                  the_row();
                  ?>
                  <a rel="noopener noreferrer" href="<?php echo get_sub_field('comp_sosmed_url') ?>" target="_blank"><i
                      class="<?php echo get_sub_field('comp_sosmed_icon') ?>"></i></a>
                <?php }
              } ?>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- end navigation -->
  </header>
  <!-- end header -->