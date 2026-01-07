<?php
if (!defined('ABSPATH')) {
  die;
}

$image_size1_section = get_image_sizes('section_image1');

new \Kirki\Panel(
  'panel_cust_page_home',
  [
    'title' => esc_html__('Site Home Page', 'thrive'),
    'description' => esc_html__('Site Page Customizer', 'thrive'),
    'active_callback' => 'is_front_page',
  ]
);


new \Kirki\Section(
  'sec_home_header',
  [
    'title' => 'Section Header',
    'description' => esc_html__('Customize Home Header Section', 'thrive'),
    'panel' => 'panel_cust_page_home',
  ]
);

new \Kirki\Field\Text(
  [
    'settings' => 'set_home_header_title',
    'label' => esc_html__('Section Header Title', 'thrive'),
    'description' => esc_html__('Please, insert the Title (max characters: 50)', 'thrive'),
    'section' => 'sec_home_header',
    'input_attrs' => [
      'maxlength' => 50,
    ]
  ]
);

new \Kirki\Field\Repeater(
  [
    'settings' => 'set_home_header_secondary_text',
    'label' => esc_html__('Header Secondary Text', 'thrive'),
    'section' => 'sec_home_header',
    'row_label' => [
      'value' => esc_html__('Secondary Text', 'thrive'),
    ],
    'choices' => [
      'limit' => 3,
    ],
    'fields' => [
      'secondary_text' => [
        'type' => 'text',
        'label' => esc_html__('Text', 'thrive'),
        'description' => 'max characters (7)',
        'sanitize_callback' => function ($value) {
          $value_test = sanitize_text_field($value);
          if (mb_strlen($value_test) > 7) {
            return mb_substr($value_test, 0, 7);
          } else {
            return wp_kses_post($value_test);
          }
        },
      ],
    ],
  ]
);

new \Kirki\Field\Text(
  [
    'settings' => 'set_home_header_desc',
    'label' => esc_html__('Section Header Description', 'thrive'),
    'description' => esc_html__('Please, insert the  Description (max characters: 150)', 'thrive'),
    'section' => 'sec_home_header',
    'input_attrs' => [
      'maxlength' => 150,
    ]
  ]
);



new \Kirki\Section(
  'sec_home_testimonial',
  [
    'title' => 'Section Testimonial',
    'description' => esc_html__('Customize Home Testimonial Section', 'thrive'),
    'panel' => 'panel_cust_page_home',
  ]
);

new \Kirki\Field\Text(
  [
    'settings' => 'set_home_testimonial_title',
    'label' => esc_html__('Section Testimonial Title', 'thrive'),
    'description' => esc_html__('Please, insert the Title', 'thrive'),
    'section' => 'sec_home_testimonial',
    'input_attrs' => [
      'maxlength' => 100,
    ]
  ]
);

new \Kirki\Field\Text(
  [
    'settings' => 'set_home_testimonial_subtitle',
    'label' => esc_html__('Section Testimonial Subtitle', 'thrive'),
    'description' => esc_html__('Please, insert the Subtitle', 'thrive'),
    'section' => 'sec_home_testimonial',
    'input_attrs' => [
      'maxlength' => 50,
    ]
  ]
);

new \Kirki\Field\Number(
  [
    'settings' => 'set_home_testimonial_max_post',
    'label' => esc_html__('Max Post', 'thrive'),
    'section' => 'sec_home_testimonial',
    'default' => 10,
    'choices' => [
      'min' => 1,
      'max' => 20,
      'step' => 1,
    ],
  ]
);


new \Kirki\Field\Image(
  [
    'settings' => 'set_home_testimonial_image',
    'label' => esc_html__('Section Image', 'thrive'),
    'section' => 'sec_home_testimonial',
    'description' => "For best result the resolutions is $image_size1_section[width] X $image_size1_section[height] or higher",
    'choices' => [
      'save_as' => 'id',
    ],
  ]
);