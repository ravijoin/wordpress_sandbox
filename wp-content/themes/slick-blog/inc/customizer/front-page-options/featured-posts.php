<?php
/**
 * Featured Posts Section
 *
 * @package Slick_Blog
 */

$wp_customize->add_section(
	'slick_blog_featured_posts_section',
	array(
		'panel' => 'slick_blog_front_page_options',
		'title' => esc_html__( 'Featured Posts Section', 'slick-blog' ),
	)
);

// Featured Posts Section - Enable Section.
$wp_customize->add_setting(
	'slick_blog_enable_featured_posts_section',
	array(
		'default'           => false,
		'sanitize_callback' => 'slick_blog_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Slick_Blog_Toggle_Switch_Custom_Control(
		$wp_customize,
		'slick_blog_enable_featured_posts_section',
		array(
			'label'    => esc_html__( 'Enable Featured Posts Section', 'slick-blog' ),
			'section'  => 'slick_blog_featured_posts_section',
			'settings' => 'slick_blog_enable_featured_posts_section',
		)
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'slick_blog_enable_featured_posts_section',
		array(
			'selector' => '#slick_blog_featured_posts_section .section-link',
			'settings' => 'slick_blog_enable_featured_posts_section',
		)
	);
}

// Featured Posts Section - Section Title.
$wp_customize->add_setting(
	'slick_blog_featured_posts_section_title',
	array(
		'default'           => __( 'Asia Travel Blog', 'slick-blog' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'slick_blog_featured_posts_section_title',
	array(
		'label'           => esc_html__( 'Section Title', 'slick-blog' ),
		'section'         => 'slick_blog_featured_posts_section',
		'settings'        => 'slick_blog_featured_posts_section_title',
		'type'            => 'text',
		'active_callback' => 'slick_blog_is_featured_posts_section_enabled',
	)
);

// Featured Posts Section - Content Type.
$wp_customize->add_setting(
	'slick_blog_featured_posts_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'slick_blog_sanitize_select',
	)
);

$wp_customize->add_control(
	'slick_blog_featured_posts_content_type',
	array(
		'label'           => esc_html__( 'Select Content Type', 'slick-blog' ),
		'section'         => 'slick_blog_featured_posts_section',
		'settings'        => 'slick_blog_featured_posts_content_type',
		'type'            => 'select',
		'active_callback' => 'slick_blog_is_featured_posts_section_enabled',
		'choices'         => array(
			'post'     => esc_html__( 'Post', 'slick-blog' ),
			'category' => esc_html__( 'Category', 'slick-blog' ),
		),
	)
);

// Featured Posts Section - Select Featured Posts Category.
$wp_customize->add_setting(
	'slick_blog_featured_posts_content_category',
	array(
		'sanitize_callback' => 'slick_blog_sanitize_select',
	)
);

$wp_customize->add_control(
	'slick_blog_featured_posts_content_category',
	array(
		'label'           => esc_html__( 'Select Category', 'slick-blog' ),
		'section'         => 'slick_blog_featured_posts_section',
		'settings'        => 'slick_blog_featured_posts_content_category',
		'active_callback' => 'slick_blog_is_featured_posts_section_and_content_type_category_enabled',
		'type'            => 'select',
		'choices'         => slick_blog_get_post_cat_choices(),
	)
);

for ( $i = 1; $i <= 5; $i++ ) {
	// Featured Posts Section - Select Post.
	$wp_customize->add_setting(
		'slick_blog_featured_posts_content_post_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'slick_blog_featured_posts_content_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Post %d', 'slick-blog' ), $i ),
			'section'         => 'slick_blog_featured_posts_section',
			'settings'        => 'slick_blog_featured_posts_content_post_' . $i,
			'active_callback' => 'slick_blog_is_featured_posts_section_and_content_type_post_enabled',
			'type'            => 'select',
			'choices'         => slick_blog_get_post_choices(),
		)
	);

}
