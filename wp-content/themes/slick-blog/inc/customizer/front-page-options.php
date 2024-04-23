<?php
/**
 * Front Page Options
 *
 * @package Slick_Blog
 */

$wp_customize->add_panel(
	'slick_blog_front_page_options',
	array(
		'title'    => esc_html__( 'Front Page Options', 'slick-blog' ),
		'priority' => 130,
	)
);

// Banner Slider Section.
require get_template_directory() . '/inc/customizer/front-page-options/slider.php';

// Categories Section.
require get_template_directory() . '/inc/customizer/front-page-options/categories.php';

// Featured Posts Section.
require get_template_directory() . '/inc/customizer/front-page-options/featured-posts.php';

