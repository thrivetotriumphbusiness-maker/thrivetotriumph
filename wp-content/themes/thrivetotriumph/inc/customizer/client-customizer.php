<?php
if (!defined('ABSPATH')) {
  die;
}

$image_size_slider = get_image_sizes('page_slider');
new \Kirki\Panel(
  'panel_user_page_client',
  [
    'title' => esc_html__('Client Page', 'thrive'),
    'description' => esc_html__('Client Page Customizer', 'thrive'),
    'active_callback' => function () {
      return is_page('clients'); }
  ]
);

new \Kirki\Section(
  'sec_client_header',
  [
    'title' => 'Header',
    'description' => esc_html__('Customize Header Section', 'thrive'),
    'panel' => 'panel_user_page_client',
  ]
);

new \Kirki\Field\Text(
  [
    'settings' => 'set_client_header_title',
    'label' => esc_html__('Title', 'thrive'),
    'description' => esc_html__('Please, insert the Title', 'thrive'),
    'section' => 'sec_client_header',
  ]
);

new \Kirki\Field\Text(
  [
    'settings' => 'set_client_header_subtitle',
    'label' => esc_html__('Subtitle', 'thrive'),
    'description' => esc_html__('Please, insert the Subtitle', 'thrive'),
    'section' => 'sec_client_header',
  ]
);

new \Kirki\Field\Image(
  [
    'settings' => 'set_client_header_image',
    'label' => esc_html__('Header Image', 'thrive'),
    'section' => 'sec_client_header',
    'description' => "For best result the resolutions is $image_size_slider[width] X $image_size_slider[height] or higher",
    'choices' => [
      'save_as' => 'id',
    ],
  ]
);