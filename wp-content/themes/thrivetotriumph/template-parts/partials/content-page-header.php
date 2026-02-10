<?php 
$image_header = get_field('page_header_img');
?>
<section class="top-space-margin general-page-header dark-overlay page-title-big-typography cover-background"
    style="background-image: url('<?php echo $image_header ? $image_header['sizes']['page_slider'] : 'https://placehold.co/1920x560' ?>')">
    <div class="container">
      <div class="row extra-very-small-screen align-items-center">
        <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small"
          data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-30, 0], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
          <h1 class="mb-20px xs-mb-20px text-white text-shadow-medium"><span
              class="w-30px h-2px bg-base-color d-inline-block align-middle position-relative top-minus-2px me-10px"></span><?php echo get_field('page_header_subtitle') ?>
          </h1>
          <h2 class="text-white text-shadow-medium fw-500 ls-minus-2px mb-0"><?php echo get_field('page_header_title') ?>
          </h2>
        </div>
      </div>
    </div>
  </section>