<?php
if (!defined('ABSPATH')) {
  die;
}

// customizer
require_once get_template_directory() . '/inc/customizer/customizer.php';

define('STRICT_ROLES', ['web_manager']);
define('STRICT_PAGES', ['home', 'privacy-policy', 'about']);

function get_image_sizes($size = '')
{
  $wp_additional_image_sizes = wp_get_additional_image_sizes();

  $sizes = array();
  $get_intermediate_image_sizes = get_intermediate_image_sizes();

  // Create the full array with sizes and crop info
  foreach ($get_intermediate_image_sizes as $_size) {
    if (in_array($_size, array('thumbnail', 'medium', 'large'))) {
      $sizes[$_size]['width'] = get_option($_size . '_size_w');
      $sizes[$_size]['height'] = get_option($_size . '_size_h');
      $sizes[$_size]['crop'] = (bool) get_option($_size . '_crop');
    } elseif (isset($wp_additional_image_sizes[$_size])) {
      $sizes[$_size] = array(
        'width' => $wp_additional_image_sizes[$_size]['width'],
        'height' => $wp_additional_image_sizes[$_size]['height'],
        'crop' => $wp_additional_image_sizes[$_size]['crop']
      );
    }
  }

  // Get only 1 size if found
  if ($size) {
    if (isset($sizes[$size])) {
      return $sizes[$size];
    } else {
      return false;
    }
  }
  return $sizes;
}

function mytheme_comment($comment, $args, $depth)
{
  ?>
  <li>
    <div class="d-block d-md-flex w-100 align-items-center align-items-md-start ">
      <div class="w-90px sm-w-65px sm-mb-10px">
        <img src="<?php echo get_avatar_url($comment, ['size' => 130]); ?>" class="rounded-circle" alt="Avatar Comment">
      </div>
      <div class="w-100 ps-30px last-paragraph-no-margin sm-ps-0">
        <a href="#" class="text-dark-gray fw-500"><?php echo $comment->comment_author ?></a>
        <?php
        comment_reply_link([
          'depth' => $depth,
          'max_depth' => $args['max_depth'],
          'reply_text' => 'Reply'
        ]);
        ?>
        <div class="fs-14 lh-24 mb-10px"><?php echo get_comment_time('d M Y H:i:s') ?></div>
        <p class="w-85 sm-w-100"><?php echo esc_html($comment->comment_content) ?></p>
      </div>
    </div>
    <?php
}
function myCustomBlocks()
{
  register_block_type_from_metadata(__DIR__ . '/build/general-sec-container-block');
  register_block_type_from_metadata(__DIR__ . '/build/general-heading-block');
}

add_action('init', 'myCustomBlocks');

function my_block_editor_assets_regis()
{
  // wp_register_style('rich-text-custom-format-style', get_theme_file_uri('build/rich-text-custom-formats.css'));
  wp_enqueue_script(
    'rich-text-custom-format',
    get_template_directory_uri() . '/build/rich-text-custom-formats.js',
    array(),
    false,
    true
  );
}
add_action('enqueue_block_editor_assets', 'my_block_editor_assets_regis');

function my_web_config()
{
  add_theme_support('title-tag');
  add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
  add_theme_support('widgets');
  add_theme_support('editor-styles');


  add_editor_style(['build/rich-text-custom-formats.css']);

  add_image_size('page_slider', 1920, 560, true);
  add_image_size('section_image1', 600, 600, true);
  add_image_size('section_image2', 960, 762, true);

}
add_action('after_setup_theme', 'my_web_config');

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
    'is_home' => is_front_page()
  ]);

  wp_enqueue_script('main-script');

}

function comp_limit_edit_page($allcaps, $caps, $args, $user)
{
  if (!is_admin()) {
    return $allcaps;
  }
  if (
    empty(array_intersect(STRICT_ROLES, $user->roles))
  ) {
    return $allcaps;
  }
  $post_id = false;
  if (isset($_GET['post'])) {
    $post_id = intval($_GET['post']);
  }
  if ($post_id) {
    $post = get_post($post_id);
    if (
      (
        in_array($post->post_name, STRICT_PAGES)
      ) &&
      $post->post_type === 'page'
    ) {
      if (isset($caps[0])) {
        $allcaps[$caps[0]] = true;
      }
    } else {
      if ($post->post_type === 'page') {
        $allcaps[$caps[0]] = false;
        wp_die('You do not have permission to access this page.');
      }
    }
  }
  return $allcaps;
}
add_filter('user_has_cap', 'comp_limit_edit_page', 10, 4);


function comp_custom_row_actions($actions, $post)
{
  // var_dump("ARAEADA", $actions, $post);
  $user = wp_get_current_user();
  if (!is_admin()) {
    return $actions;
  }
  if (
    empty(array_intersect(STRICT_ROLES, $user->roles))
  ) {
    return $actions;
  } else {
    if ($post->post_type === 'page') {
      #Disable Duplicate for page except admin
      unset($actions['duplicate']);
    }
  }
  if (!in_array($post->post_name, STRICT_PAGES)) {
    unset($actions['edit']);
    unset($actions['inline hide-if-no-js']);
  }
  return $actions;
}
add_filter('page_row_actions', 'comp_custom_row_actions', 10, 2);


function my_callback_pre_get_posts($query)
{
  if (is_admin() && $query->is_main_query()) {
    $currUser = wp_get_current_user();
    global $pagenow;

    if (
      $pagenow === 'edit.php' &&
      $query->get('post_type') === 'page'
    ) {
      if (!empty(array_intersect(STRICT_ROLES, $currUser->roles))) {
        $query->set('post_name__in', STRICT_PAGES);
      }
    }
  }
}
add_action('pre_get_posts', 'my_callback_pre_get_posts');

add_action('delete_attachment', function ($post_id) {
  if (get_field('is_default_attach', $post_id)) {
    wp_die('Default image cannot be deleted.');
  }
});


function change_title_placeholder($title)
{
  $screen = get_current_screen();

  if ('client' === $screen->post_type) {
    return 'Add Client Name';
  }

  if ('service' === $screen->post_type) {
    return 'Add Service Name';
  }

  if ('testimonial' === $screen->post_type) {
    return 'Add User Fullname';
  }

  return $title;
}
add_filter('enter_title_here', 'change_title_placeholder');


function filter_post_name($data, $postarr, $unsanitized_postarr)
{
  $user = wp_get_current_user();
  $post = get_post($postarr['ID']);
  if ($post && $post->post_type === 'page' && !in_array('administrator', (array) $user->roles)) {
    $data['post_name'] = $post->post_name;
  }
  return $data;
}
add_filter('wp_insert_post_data', 'filter_post_name', 10, 3);

add_action('admin_menu', function () {
  remove_submenu_page('themes.php', 'nav-menus.php');
});
function hide_admin_role_for_non_admins($roles)
{

  if (!current_user_can('administrator')) {
    if (isset($roles['administrator'])) {
      unset($roles['administrator']);
    }
  }

  return $roles;
}
add_filter('editable_roles', 'hide_admin_role_for_non_admins');

function hide_admin_users_from_list($query)
{
  if (!is_admin() || 'users' !== get_current_screen()->id) {
    return;
  }

  if (!current_user_can('administrator')) {

    // Prevent WP from loading too much data
    $query->set('role__not_in', array('Administrator'));
  }
}
add_action('pre_get_users', 'hide_admin_users_from_list');

add_filter('upload_mimes', function ($mimes) {
  $mimes['pdf'] = 'application/pdf';
  $mimes['ppt'] = 'application/vnd.ms-powerpoint';
  $mimes['pptx'] = 'application/vnd.openxmlformats-officedocument.presentationml.presentation';

  unset($mimes['jpg']);
  unset($mimes['jpeg']);
  unset($mimes['png']);
  return $mimes;
});

// 2. Force block jpg/jpeg/png at validation level
add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {

  $blocked_ext = ['jpg', 'jpeg', 'jpe', 'png'];

  $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

  if (in_array($ext, $blocked_ext)) {
    return [
      'ext' => false,
      'type' => false,
      'proper_filename' => false,
    ];
  }

  return $data;
}, 10, 4);


function my_wp_disable_print_except_thankyou()
{
  echo '<style media="print">
            body {
                display: none !important;
            }
            html::before {
              content: "🔒 Printing is disabled for this page.";
              display: block;
              text-align: center;
              font-size: 24px;
              margin-top: 200px;
            }
        </style>';
}
add_action('wp_head', 'my_wp_disable_print_except_thankyou');


// LOGIN
function ourLoginTitle($headertext)
{
  $headertext = esc_html__('Welcome to WordPress', 'plugin-textdomain');
  return $headertext;
}
add_filter('login_headertext', 'ourLoginTitle');
function ourHeaderUrl()
{
  return esc_url(site_url(('/')));
}
add_filter('login_headerurl', 'ourHeaderUrl');


add_action('login_enqueue_scripts', function () {
  wp_enqueue_style('custom-login', get_theme_file_uri('/build/login.css'));
});

// Prevent to single page for selected pages and posts
add_action('template_redirect', function () {
  if (is_single() && (get_post_type() === 'service' || get_post_type() === 'client' || get_post_type() === 'testimonial')) {
    wp_redirect(home_url(), 301);
    exit;
  }
});

function prevent_blocks($allowed_blocks, $editor_context)
{
  $target_pages = array('about'); // masukkan ID Page

  if ($editor_context->post && in_array(strtolower($editor_context->post->post_name), $target_pages)) {
    return [
      'core/paragraph',
      'core/list',
      'core/math',
      'core/quote',
      'core/file',
      'core/columns'
    ];
  }
  return $allowed_blocks;
}

add_filter('allowed_block_types_all', 'prevent_blocks', 10, 2);


// Remove
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');