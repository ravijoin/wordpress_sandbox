<?php
/**
 * Categories Section
 *
 * @package Slick_Blog
 */

$wp_customize->add_section(
	'slick_blog_categories_section',
	array(
		'panel' => 'slick_blog_front_page_options',
		'title' => esc_html__( 'Categories Section', 'slick-blog' ),
	)
);

// Categories Section - Enable Section.
$wp_customize->add_setting(
	'slick_blog_enable_categories_section',
	array(
		'default'           => false,
		'sanitize_callback' => 'slick_blog_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Slick_Blog_Toggle_Switch_Custom_Control(
		$wp_customize,
		'slick_blog_enable_categories_section',
		array(
			'label'    => esc_html__( 'Enable Categories Section', 'slick-blog' ),
			'section'  => 'slick_blog_categories_section',
			'settings' => 'slick_blog_enable_categories_section',
		)
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'slick_blog_enable_categories_section',
		array(
			'selector' => '#slick_blog_categories_section .section-link',
			'settings' => 'slick_blog_enable_categories_section',
		)
	);
}

// Categories Section - Section Title.
$wp_customize->add_setting(
	'slick_blog_categories_title',
	array(
		'default'           => __( 'Categories', 'slick-blog' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'slick_blog_categories_title',
	array(
		'label'           => esc_html__( 'Section Title', 'slick-blog' ),
		'section'         => 'slick_blog_categories_section',
		'settings'        => 'slick_blog_categories_title',
		'type'            => 'text',
		'active_callback' => 'slick_blog_is_categories_section_enabled',
	)
);

for ( $i = 1; $i <= 4; $i++ ) {

	// Categories Section - Select Category.
	$wp_customize->add_setting(
		'slick_blog_categories_content_category_' . $i,
		array(
			'sanitize_callback' => 'slick_blog_sanitize_select',
		)
	);

	$wp_customize->add_control(
		'slick_blog_categories_content_category_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Category %d', 'slick-blog' ), $i ),
			'section'         => 'slick_blog_categories_section',
			'settings'        => 'slick_blog_categories_content_category_' . $i,
			'active_callback' => 'slick_blog_is_categories_section_enabled',
			'type'            => 'select',
			'choices'         => slick_blog_get_post_cat_choices(),
		)
	);

	// Categories Section - Category Image.
	$wp_customize->add_setting(
		'slick_blog_category_category_image_' . $i,
		array(
			'sanitize_callback' => 'slick_blog_sanitize_image',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'slick_blog_category_category_image_' . $i,
			array(
				'label'           => sprintf( esc_html__( 'Category Image %d', 'slick-blog' ), $i ),
				'section'         => 'slick_blog_categories_section',
				'settings'        => 'slick_blog_category_category_image_' . $i,
				'active_callback' => 'slick_blog_is_categories_section_enabled',
			)
		)
	);

	// Categories Section - Horizontal Line.
	$wp_customize->add_setting(
		'slick_blog_categories_horizontal_line_' . $i,
		array(
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		new Slick_Blog_Customize_Horizontal_Line(
			$wp_customize,
			'slick_blog_categories_horizontal_line_' . $i,
			array(
				'section'         => 'slick_blog_categories_section',
				'settings'        => 'slick_blog_categories_horizontal_line_' . $i,
				'active_callback' => 'slick_blog_is_categories_section_enabled',
				'type'            => 'hr',
			)
		)
	);

}
