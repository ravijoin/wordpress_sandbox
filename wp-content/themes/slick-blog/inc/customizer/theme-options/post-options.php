<?php
/**
 * Post Options
 *
 * @package Slick_Blog
 */

$wp_customize->add_section(
	'slick_blog_post_options',
	array(
		'title' => esc_html__( 'Post Options', 'slick-blog' ),
		'panel' => 'slick_blog_theme_options',
	)
);

// Post Options - Hide Date.
$wp_customize->add_setting(
	'slick_blog_post_hide_date',
	array(
		'default'           => false,
		'sanitize_callback' => 'slick_blog_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Slick_Blog_Toggle_Switch_Custom_Control(
		$wp_customize,
		'slick_blog_post_hide_date',
		array(
			'label'   => esc_html__( 'Hide Date', 'slick-blog' ),
			'section' => 'slick_blog_post_options',
		)
	)
);

// Post Options - Hide Author.
$wp_customize->add_setting(
	'slick_blog_post_hide_author',
	array(
		'default'           => false,
		'sanitize_callback' => 'slick_blog_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Slick_Blog_Toggle_Switch_Custom_Control(
		$wp_customize,
		'slick_blog_post_hide_author',
		array(
			'label'   => esc_html__( 'Hide Author', 'slick-blog' ),
			'section' => 'slick_blog_post_options',
		)
	)
);

// Post Options - Hide Category.
$wp_customize->add_setting(
	'slick_blog_post_hide_category',
	array(
		'default'           => false,
		'sanitize_callback' => 'slick_blog_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Slick_Blog_Toggle_Switch_Custom_Control(
		$wp_customize,
		'slick_blog_post_hide_category',
		array(
			'label'   => esc_html__( 'Hide Category', 'slick-blog' ),
			'section' => 'slick_blog_post_options',
		)
	)
);

// Post Options - Hide Tag.
$wp_customize->add_setting(
	'slick_blog_post_hide_tags',
	array(
		'default'           => false,
		'sanitize_callback' => 'slick_blog_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Slick_Blog_Toggle_Switch_Custom_Control(
		$wp_customize,
		'slick_blog_post_hide_tags',
		array(
			'label'   => esc_html__( 'Hide Tag', 'slick-blog' ),
			'section' => 'slick_blog_post_options',
		)
	)
);

// Post Options - Related Post Label.
$wp_customize->add_setting(
	'slick_blog_post_related_post_label',
	array(
		'default'           => __( 'Related Posts', 'slick-blog' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'slick_blog_post_related_post_label',
	array(
		'label'    => esc_html__( 'Related Posts Label', 'slick-blog' ),
		'section'  => 'slick_blog_post_options',
		'settings' => 'slick_blog_post_related_post_label',
		'type'     => 'text',
	)
);

// Post Options - Hide Related Posts.
$wp_customize->add_setting(
	'slick_blog_post_hide_related_posts',
	array(
		'default'           => false,
		'sanitize_callback' => 'slick_blog_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Slick_Blog_Toggle_Switch_Custom_Control(
		$wp_customize,
		'slick_blog_post_hide_related_posts',
		array(
			'label'   => esc_html__( 'Hide Related Posts', 'slick-blog' ),
			'section' => 'slick_blog_post_options',
		)
	)
);
