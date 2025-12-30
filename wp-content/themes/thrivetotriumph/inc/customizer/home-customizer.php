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
		'label'    => esc_html__( 'Max Post', 'thrive' ),
		'section'  => 'sec_home_testimonial',
		'default'  => 10,
		'choices'  => [
			'min'  => 1,
			'max'  => 20,
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