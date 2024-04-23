<?php
/**
 * Sidebar Option
 *
 * @package Slick_Blog
 */

$wp_customize->add_section(
	'slick_blog_sidebar_option',
	array(
		'title' => esc_html__( 'Layout', 'slick-blog' ),
		'panel' => 'slick_blog_theme_options',
	)
);

// Sidebar Option - Global Sidebar Position.
$wp_customize->add_setting(
	'slick_blog_sidebar_position',
	array(
		'sanitize_callback' => 'slick_blog_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'slick_blog_sidebar_position',
	array(
		'label'   => esc_html__( 'Global Sidebar Position', 'slick-blog' ),
		'section' => 'slick_blog_sidebar_option',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'slick-blog' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'slick-blog' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'slick-blog' ),
		),
	)
);

// Sidebar Option - Post Sidebar Position.
$wp_customize->add_setting(
	'slick_blog_post_sidebar_position',
	array(
		'sanitize_callback' => 'slick_blog_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'slick_blog_post_sidebar_position',
	array(
		'label'   => esc_html__( 'Post Sidebar Position', 'slick-blog' ),
		'section' => 'slick_blog_sidebar_option',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'slick-blog' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'slick-blog' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'slick-blog' ),
		),
	)
);

// Sidebar Option - Page Sidebar Position.
$wp_customize->add_setting(
	'slick_blog_page_sidebar_position',
	array(
		'sanitize_callback' => 'slick_blog_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'slick_blog_page_sidebar_position',
	array(
		'label'   => esc_html__( 'Page Sidebar Position', 'slick-blog' ),
		'section' => 'slick_blog_sidebar_option',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'slick-blog' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'slick-blog' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'slick-blog' ),
		),
	)
);
