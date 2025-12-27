<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
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
    <div
      class="header-top-bar top-bar-light bg-white disable-fixed md-border-bottom border-color-transparent-dark-very-light">
      <div class="container-fluid">
        <div class="row h-45px align-items-center m-0">
          <div class="col-md-6 text-center text-md-start">
            <div class="fs-14 text-dark-gray">Our consulting experts waiting for you! <a
                href="demo-consulting-contact.html" class="text-base-color fw-500 text-decoration-line-bottom">Contact
                now</a></div>
          </div>
          <div class="col-6 text-end d-none d-md-flex">
            <div class="widget fs-14 me-30px md-me-0"><a href="tel:02228899900" class="text-dark-gray"><i
                  class="feather icon-feather-phone-call text-base-color"></i> 0222 8899900</a></div>
            <div class="widget fs-14 text-dark-gray d-none d-lg-inline-block"><i
                class="feather icon-feather-map-pin text-base-color"></i> Broadway, 24th Floor, San Francisco</div>
          </div>
        </div>
      </div>
    </div>
    <!-- end header top bar -->
    <!-- start navigation -->
    <nav
      class="navbar navbar-expand-lg header-transparent bg-transparent border-bottom border-color-transparent-white-light disable-fixed">
      <div class="container-fluid">
        <div class="col-auto col-lg-2 me-auto">
          <a class="navbar-brand" href="demo-consulting.html">
            <img src="<?php echo get_theme_file_uri('assets/images/demo-consulting-logo-white.png') ?>"
              data-at2x="<?php echo get_theme_file_uri('assets/images/demo-consulting-logo-white@2x.png') ?>" alt=""
              class="default-logo">
            <img src="<?php echo get_theme_file_uri('assets/images/demo-consulting-logo-black.png') ?>"
              data-at2x="<?php echo get_theme_file_uri('assets/images/demo-consulting-logo-black@2x.png') ?>" alt=""
              class="alt-logo">
            <img src="<?php echo get_theme_file_uri('assets/images/demo-consulting-logo-black.png') ?>"
              data-at2x="<?php echo get_theme_file_uri('assets/images/demo-consulting-logo-black@2x.png') ?>" alt=""
              class="mobile-logo">
          </a>
        </div>
        <div class="col-auto col-lg-8 menu-order position-static">
          <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-label="Toggle navigation">
            <span class="navbar-toggler-line"></span>
            <span class="navbar-toggler-line"></span>
            <span class="navbar-toggler-line"></span>
            <span class="navbar-toggler-line"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav alt-font">
              <li class="nav-item"><a href="<?php echo esc_url(site_url('/')); ?>" class="nav-link">About</a></li>
              <li class="nav-item"><a href="demo-consulting-process.html" class="nav-link">Process</a></li>
              <li class="nav-item"><a href="demo-consulting-clients.html" class="nav-link">Clients</a></li>
              <li class="nav-item"><a href="demo-consulting-news.html" class="nav-link">News</a></li>
              <li class="nav-item"><a href="demo-consulting-contact.html" class="nav-link">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-auto col-lg-2 text-end md-pe-0">
          <div class="header-icon">
            <div class="header-push-button icon">
              <div class="push-button">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- start push popup -->
    <div class="push-menu push-menu-style-3 p-50px bg-dark-gray">
      <span class="close-menu text-dark-gray bg-white"><i class="fa-solid fa-xmark"></i></span>
      <div class="push-menu-wrapper text-dark-gray" data-scroll-options='{ "theme": "light" }'>
        <div class="w-100">
          <h4 class="alt-font text-white fw-400 mb-30px d-block w-90 lh-40">Scalable business for <span
              class="d-inline-block fw-600 border-3 border-bottom border-color-base-color">startups</span></h4>
        </div>
        <div class="col-12">
          <ul class="fs-20 ps-0 alt-font">
            <li class="pt-10px pb-10px w-100"><a class="facebook" href="https://www.facebook.com/" target="_blank"><i
                  class="fa-brands fa-facebook-f w-30px text-start text-white"></i>Facebook</a></li>
            <li class="pt-10px pb-10px w-100"><a class="instagram" href="https://www.instagram.com/" target="_blank"><i
                  class="fa-brands fa-instagram w-30px text-start text-white"></i>Instagram</a></li>
            <li class="pt-10px pb-10px w-100"><a class="twitter" href="https://twitter.com/" target="_blank"><i
                  class="fa-brands fa-twitter w-30px text-start text-white"></i>Twitter</a></li>
            <li class="pt-10px pb-10px w-100"><a class="dribbble" href="https://www.dribbble.com/" target="_blank"><i
                  class="fa-brands fa-dribbble w-30px text-start text-white"></i>Dribbble</a></li>
          </ul>
        </div>
        <div class="border-top border-color-transparent-white-light pt-30px w-100">
          <span class="fs-24 fw-500 text-white"><a href="tel:12345678910">+1 234 567 8910</a></span>
          <a href="mailto:info@domain.com">info@domain.com</a>
        </div>
      </div>
    </div>
    <!-- end push popup -->
  </header>
  <!-- end header -->