<?php
/**
 * Pagination
 *
 * @package Slick_Blog
 */

$wp_customize->add_section(
	'slick_blog_pagination',
	array(
		'panel' => 'slick_blog_theme_options',
		'title' => esc_html__( 'Pagination', 'slick-blog' ),
	)
);

// Pagination - Enable Pagination.
$wp_customize->add_setting(
	'slick_blog_enable_pagination',
	array(
		'default'           => true,
		'sanitize_callback' => 'slick_blog_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Slick_Blog_Toggle_Switch_Custom_Control(
		$wp_customize,
		'slick_blog_enable_pagination',
		array(
			'label'    => esc_html__( 'Enable Pagination', 'slick-blog' ),
			'section'  => 'slick_blog_pagination',
			'settings' => 'slick_blog_enable_pagination',
			'type'     => 'checkbox',
		)
	)
);

// Pagination - Pagination Type.
$wp_customize->add_setting(
	'slick_blog_pagination_type',
	array(
		'default'           => 'default',
		'sanitize_callback' => 'slick_blog_sanitize_select',
	)
);

$wp_customize->add_control(
	'slick_blog_pagination_type',
	array(
		'label'           => esc_html__( 'Pagination Type', 'slick-blog' ),
		'section'         => 'slick_blog_pagination',
		'settings'        => 'slick_blog_pagination_type',
		'active_callback' => 'slick_blog_is_pagination_enabled',
		'type'            => 'select',
		'choices'         => array(
			'default' => __( 'Default (Older/Newer)', 'slick-blog' ),
			'numeric' => __( 'Numeric', 'slick-blog' ),
		),
	)
);
