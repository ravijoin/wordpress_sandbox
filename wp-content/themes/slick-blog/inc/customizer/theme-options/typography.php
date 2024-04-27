<?php
/**
 * Typography
 *
 * @package Slick_Blog
 */

$wp_customize->add_section(
	'slick_blog_typography',
	array(
		'panel' => 'slick_blog_theme_options',
		'title' => esc_html__( 'Typography', 'slick-blog' ),
	)
);

// Typography - Site Title Font.
$wp_customize->add_setting(
	'slick_blog_site_title_font',
	array(
		'default'           => 'Habibi',
		'sanitize_callback' => 'slick_blog_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'slick_blog_site_title_font',
	array(
		'label'    => esc_html__( 'Site Title Font Family', 'slick-blog' ),
		'section'  => 'slick_blog_typography',
		'settings' => 'slick_blog_site_title_font',
		'type'     => 'select',
		'choices'  => slick_blog_get_all_google_font_families(),
	)
);

// Typography - Site Description Font.
$wp_customize->add_setting(
	'slick_blog_site_description_font',
	array(
		'default'           => 'Aleo',
		'sanitize_callback' => 'slick_blog_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'slick_blog_site_description_font',
	array(
		'label'    => esc_html__( 'Site Description Font Family', 'slick-blog' ),
		'section'  => 'slick_blog_typography',
		'settings' => 'slick_blog_site_description_font',
		'type'     => 'select',
		'choices'  => slick_blog_get_all_google_font_families(),
	)
);

// Typography - Header Font.
$wp_customize->add_setting(
	'slick_blog_header_font',
	array(
		'default'           => 'Fanwood Text',
		'sanitize_callback' => 'slick_blog_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'slick_blog_header_font',
	array(
		'label'    => esc_html__( 'Header Font Family', 'slick-blog' ),
		'section'  => 'slick_blog_typography',
		'settings' => 'slick_blog_header_font',
		'type'     => 'select',
		'choices'  => slick_blog_get_all_google_font_families(),
	)
);

// Typography - Body Font.
$wp_customize->add_setting(
	'slick_blog_body_font',
	array(
		'default'           => 'Aleo',
		'sanitize_callback' => 'slick_blog_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'slick_blog_body_font',
	array(
		'label'    => esc_html__( 'Body Font Family', 'slick-blog' ),
		'section'  => 'slick_blog_typography',
		'settings' => 'slick_blog_body_font',
		'type'     => 'select',
		'choices'  => slick_blog_get_all_google_font_families(),
	)
);
