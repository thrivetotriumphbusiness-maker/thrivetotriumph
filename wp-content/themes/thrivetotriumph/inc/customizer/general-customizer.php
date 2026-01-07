<?php
if (!defined('ABSPATH')) {
  die;
}

new \Kirki\Panel(
  'panel_my_site_general',
  [
    'title' => esc_html__('General Page Customizer', domain: 'thrive'),
    'description' => esc_html__('General Page Customizer', 'thrive'),
  ]
);

// new \Kirki\Section(
//   'sec_off_canvas_right',
//   [
//     'title' => 'Section Off Canvas',
//     'description' => esc_html__('Customize Off Canvas', 'thrive'),
//     'panel' => 'panel_thrive_general',
//   ]
// );

// new \Kirki\Field\Editor(
//   [
//     'settings' => 'set_off_canvas_title',
//     'label' => esc_html__('Title', 'thrive'),
//     'description' => esc_html__('Please, insert the Title (Maximum 50 characters)', 'thrive'),
//     'section' => 'sec_off_canvas_right',
//     'default' => '',
//     'choices' => [
//       'mediaButtons' => false,
//       "tinymce" => [
//         'wpautop' => true,
//         'toolbar1' => 'bold, italic, underline'
//       ]
//     ],
//     'sanitize_callback' => function ($value) {
//       $value_test = wp_strip_all_tags($value);
//       if (mb_strlen($value_test) > 50){
//         return mb_substr($value_test, 0, 50);
//       } else {
//         return wp_kses_post($value);
//       }
//     },
//   ]
// );

new \Kirki\Section(
  'sec_footer',
  [
    'title' => 'Section Footer',
    'description' => esc_html__('Customize Section Footer', 'thrive'),
    'panel' => 'panel_my_site_general',
  ]
);

new \Kirki\Field\Textarea(
  [
    'settings' => 'set_footer_site_desc',
    'label' => esc_html__('Section Footer Site Description', 'thrive'),
    'description' => esc_html__('Please, insert the  Description (max characters: 200)', 'thrive'),
    'section' => 'sec_footer',
    'input_attrs' => [
      'maxlength' => 200,
    ],
    'sanitize_callback' => function ($value) {
      $value_test = sanitize_textarea_field($value);
      if (mb_strlen($value_test) > 200) {
        return mb_substr($value_test, 0, 200);
      } else {
        return wp_kses_post($value_test);
      }
    },
  ]
);

new \Kirki\Section(
  'sec_copyright_text',
  [
    'title' => 'Section Copyright Text',
    'description' => esc_html__('Customize Copyright Text', 'thrive'),
    'panel' => 'panel_my_site_general',
  ]
);

new \Kirki\Field\Editor(
  [
    'settings' => 'set_copyright_text',
    'label' => esc_html__('Text', 'thrive'),
    'description' => esc_html__('Please, insert the Text (Maximum 50 characters)', 'thrive'),
    'section' => 'sec_copyright_text',
    'default' => '',
    'choices' => [
      'mediaButtons' => false,
      "tinymce" => [
        'wpautop' => true,
        'toolbar1' => 'bold, italic, underline, link'
      ]
    ],
    'sanitize_callback' => function ($value) {
      $value_test = wp_strip_all_tags($value);
      if (mb_strlen($value_test) > 50) {
        return mb_substr($value_test, 0, 50);
      } else {
        return wp_kses_post($value);
      }
    },
  ]
);
