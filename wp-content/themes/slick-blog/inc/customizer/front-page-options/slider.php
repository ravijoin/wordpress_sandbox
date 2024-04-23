<?php
/**
 * Banner Slider Section
 *
 * @package Slick_Blog
 */

$wp_customize->add_section(
	'slick_blog_slider_section',
	array(
		'panel' => 'slick_blog_front_page_options',
		'title' => esc_html__( 'Banner Slider Section', 'slick-blog' ),
	)
);

// Banner Slider Section - Enable Section.
$wp_customize->add_setting(
	'slick_blog_enable_slider_section',
	array(
		'default'           => false,
		'sanitize_callback' => 'slick_blog_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Slick_Blog_Toggle_Switch_Custom_Control(
		$wp_customize,
		'slick_blog_enable_slider_section',
		array(
			'label'    => esc_html__( 'Enable Banner Slider Section', 'slick-blog' ),
			'section'  => 'slick_blog_slider_section',
			'settings' => 'slick_blog_enable_slider_section',
		)
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'slick_blog_enable_slider_section',
		array(
			'selector' => '#slick_blog_slider_section .section-link',
			'settings' => 'slick_blog_enable_slider_section',
		)
	);
}

// Banner Slider Section - Banner Slider Content Type.
$wp_customize->add_setting(
	'slick_blog_slider_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'slick_blog_sanitize_select',
	)
);

$wp_customize->add_control(
	'slick_blog_slider_content_type',
	array(
		'label'           => esc_html__( 'Select Content Type', 'slick-blog' ),
		'section'         => 'slick_blog_slider_section',
		'settings'        => 'slick_blog_slider_content_type',
		'type'            => 'select',
		'active_callback' => 'slick_blog_is_slider_section_enabled',
		'choices'         => array(
			'page' => esc_html__( 'Page', 'slick-blog' ),
			'post' => esc_html__( 'Post', 'slick-blog' ),
		),
	)
);

for ( $i = 1; $i <= 3; $i++ ) {

	// Banner Slider Section - Select Banner Post.
	$wp_customize->add_setting(
		'slick_blog_slider_content_post_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'slick_blog_slider_content_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Post %d', 'slick-blog' ), $i ),
			'section'         => 'slick_blog_slider_section',
			'settings'        => 'slick_blog_slider_content_post_' . $i,
			'active_callback' => 'slick_blog_is_slider_section_and_content_type_post_enabled',
			'type'            => 'select',
			'choices'         => slick_blog_get_post_choices(),
		)
	);

	// Banner Slider Section - Select Banner Page.
	$wp_customize->add_setting(
		'slick_blog_slider_content_page_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'slick_blog_slider_content_page_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Page %d', 'slick-blog' ), $i ),
			'section'         => 'slick_blog_slider_section',
			'settings'        => 'slick_blog_slider_content_page_' . $i,
			'active_callback' => 'slick_blog_is_slider_section_and_content_type_page_enabled',
			'type'            => 'select',
			'choices'         => slick_blog_get_page_choices(),
		)
	);

}
