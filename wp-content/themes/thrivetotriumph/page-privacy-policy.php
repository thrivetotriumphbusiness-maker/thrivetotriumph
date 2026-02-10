<?php
get_header();
while (have_posts()) {
  the_post();
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