<?php
get_header();
while (have_posts()) {
	the_post();
	$image_header = get_field('page_header_img');
	?>
	<!-- start page title -->
	<section class="cover-background page-title-big-typography ipad-top-space-margin xs-py-0"
		style="background-image: url('<?php echo $image_header ? $image_header['sizes']['page_slider'] : 'https://placehold.co/1920x560' ?>');"
		data-anime='{ "opacity": [0, 1], "easing": "easeOutQuad" }'>
		<div class="container">
			<div class="row align-items-center extra-small-screen">
				<div class="col-9 col-lg-5 col-sm-6 position-relative page-title-extra-small"
					data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-50, 0], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
					<h1 class="mb-20px text-base-color fw-500 ls-minus-05px">
						<?php echo get_field('page_header_subtitle') ?>
					</h1>
					<h2 class=" fw-700 text-dark-gray mb-0 ls-minus-2px"><?php echo get_field('page_header_title') ?>
					</h2>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->
	<!-- start section -->
	<?php the_content() ?>
	<!-- end section -->
	<?php
}
get_footer(); ?>