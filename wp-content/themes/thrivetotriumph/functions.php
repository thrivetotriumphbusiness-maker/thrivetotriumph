<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles()
{
  // wp_deregister_script('jquery');
  wp_register_style('icon-style', get_theme_file_uri('assets/css/icon.min.css'));
  wp_register_style('vendors-style', get_theme_file_uri('assets/css/vendors.min.css'));
  wp_register_style('pre-style', get_theme_file_uri('build/style-pre-style.css'));
  wp_enqueue_style('main-style', get_theme_file_uri('build/index.css'), ['vendors-style', 'icon-style', 'pre-style']);

  wp_register_script('pre-script', get_theme_file_uri('assets/js/vendors.min.js'), ['jquery'], null, true);
  wp_register_script('main-script', get_theme_file_uri('build/index.js'), ['jquery', 'pre-script'], null, true);

  wp_enqueue_script('pre-script');

  // Tambahkan inline script untuk set alias $
  wp_add_inline_script('pre-script', 'var $ = jQuery.noConflict();', 'before');

  wp_localize_script('main-script', 'siteLocalData', [
    'root_url' => get_site_url(),
    'nonce' => wp_create_nonce('wp_rest'),
    'is_admin_bar_show' => is_admin_bar_showing(),
  ]);

  wp_enqueue_script('main-script');

}