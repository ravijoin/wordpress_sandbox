<?php
/**
 * Excerpt
 *
 * @package Slick_Blog
 */

$wp_customize->add_section(
	'slick_blog_excerpt_options',
	array(
		'panel' => 'slick_blog_theme_options',
		'title' => esc_html__( 'Excerpt', 'slick-blog' ),
	)
);

// Excerpt - Excerpt Length.
$wp_customize->add_setting(
	'slick_blog_excerpt_length',
	array(
		'default'           => 20,
		'sanitize_callback' => 'slick_blog_sanitize_number_range',
	)
);

$wp_customize->add_control(
	'slick_blog_excerpt_length',
	array(
		'label'       => esc_html__( 'Excerpt Length (no. of words)', 'slick-blog' ),
		'description' => esc_html__( 'Note: Min 1. Please input the valid number and save. Then refresh the page to see the change.', 'slick-blog' ),
		'section'     => 'slick_blog_excerpt_options',
		'settings'    => 'slick_blog_excerpt_length',
		'type'        => 'number',
		'input_attrs' => array(
			'min' => 1,
		),
	)
);

// Excerpt - Read More Button Label.
$wp_customize->add_setting(
	'slick_blog_excerpt_readmore_button_label',
	array(
		'default'           => __( 'Read More', 'slick-blog' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'slick_blog_excerpt_readmore_button_label',
	array(
		'label'    => esc_html__( 'Read More Button Label', 'slick-blog' ),
		'section'  => 'slick_blog_excerpt_options',
		'settings' => 'slick_blog_excerpt_readmore_button_label',
		'type'     => 'text',
	)
);
