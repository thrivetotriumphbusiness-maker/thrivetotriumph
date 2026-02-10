<?php
if (!is_user_logged_in()) {
	wp_redirect(esc_url(site_url('/')));
}
get_header();
while (have_posts()) {
	the_post();
	$image_header = get_field('page_header_img');
	?>
	<!-- start page title -->
	<?php get_template_part('template-parts/partials/content', 'page-header') ?>
	<!-- end page title -->
	<!-- start section -->
	<?php the_content() ?>
	<!-- end section -->
	<?php
}
get_footer(); ?>