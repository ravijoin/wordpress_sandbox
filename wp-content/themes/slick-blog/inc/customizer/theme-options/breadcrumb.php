<?php
/**
 * Breadcrumb
 *
 * @package Slick_Blog
 */

$wp_customize->add_section(
	'slick_blog_breadcrumb',
	array(
		'title' => esc_html__( 'Breadcrumb', 'slick-blog' ),
		'panel' => 'slick_blog_theme_options',
	)
);

// Breadcrumb - Enable Breadcrumb.
$wp_customize->add_setting(
	'slick_blog_enable_breadcrumb',
	array(
		'sanitize_callback' => 'slick_blog_sanitize_switch',
		'default'           => true,
	)
);

$wp_customize->add_control(
	new Slick_Blog_Toggle_Switch_Custom_Control(
		$wp_customize,
		'slick_blog_enable_breadcrumb',
		array(
			'label'   => esc_html__( 'Enable Breadcrumb', 'slick-blog' ),
			'section' => 'slick_blog_breadcrumb',
		)
	)
);

// Breadcrumb - Separator.
$wp_customize->add_setting(
	'slick_blog_breadcrumb_separator',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default'           => '/',
	)
);

$wp_customize->add_control(
	'slick_blog_breadcrumb_separator',
	array(
		'label'           => esc_html__( 'Separator', 'slick-blog' ),
		'active_callback' => 'slick_blog_is_breadcrumb_enabled',
		'section'         => 'slick_blog_breadcrumb',
	)
);
