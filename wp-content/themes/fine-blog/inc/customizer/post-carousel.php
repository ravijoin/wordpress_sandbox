<?php
/**
 * Post Carousel Section
 *
 * @package Fine Blog
 */

$wp_customize->add_section(
	'fine_blog_post_carousel_section',
	array(
		'panel' => 'slick_blog_front_page_options',
		'title' => esc_html__( 'Posts Carousel Section', 'fine-blog' ),
	)
);

// Post Carousel Section - Enable Section.
$wp_customize->add_setting(
	'fine_blog_enable_post_carousel_section',
	array(
		'default'           => false,
		'sanitize_callback' => 'slick_blog_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Slick_Blog_Toggle_Switch_Custom_Control(
		$wp_customize,
		'fine_blog_enable_post_carousel_section',
		array(
			'label'    => esc_html__( 'Enable Post Carousel Section', 'fine-blog' ),
			'section'  => 'fine_blog_post_carousel_section',
			'settings' => 'fine_blog_enable_post_carousel_section',
		)
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'fine_blog_enable_post_carousel_section',
		array(
			'selector' => '#fine_blog_post_carousel_section .section-link',
			'settings' => 'fine_blog_enable_post_carousel_section',
		)
	);
}

// Post Carousel Section - Content Type.
$wp_customize->add_setting(
	'fine_blog_post_carousel_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'slick_blog_sanitize_select',
	)
);

$wp_customize->add_control(
	'fine_blog_post_carousel_content_type',
	array(
		'label'           => esc_html__( 'Select Content Type', 'fine-blog' ),
		'section'         => 'fine_blog_post_carousel_section',
		'settings'        => 'fine_blog_post_carousel_content_type',
		'type'            => 'select',
		'active_callback' => 'fine_blog_is_post_carousel_section_enabled',
		'choices'         => array(
			'post'     => esc_html__( 'Post', 'fine-blog' ),
			'category' => esc_html__( 'Category', 'fine-blog' ),
		),
	)
);

// Post Carousel Section - Select Post Carousel Category.
$wp_customize->add_setting(
	'fine_blog_post_carousel_content_category',
	array(
		'sanitize_callback' => 'slick_blog_sanitize_select',
	)
);

$wp_customize->add_control(
	'fine_blog_post_carousel_content_category',
	array(
		'label'           => esc_html__( 'Select Category', 'fine-blog' ),
		'section'         => 'fine_blog_post_carousel_section',
		'settings'        => 'fine_blog_post_carousel_content_category',
		'active_callback' => 'fine_blog_is_post_carousel_section_and_content_type_category_enabled',
		'type'            => 'select',
		'choices'         => slick_blog_get_post_cat_choices(),
	)
);

for ( $i = 1; $i <= 4; $i++ ) {
	// Post Carousel Section - Select Post.
	$wp_customize->add_setting(
		'fine_blog_post_carousel_content_post_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'fine_blog_post_carousel_content_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Post %d', 'fine-blog' ), $i ),
			'section'         => 'fine_blog_post_carousel_section',
			'settings'        => 'fine_blog_post_carousel_content_post_' . $i,
			'active_callback' => 'fine_blog_is_post_carousel_section_and_content_type_post_enabled',
			'type'            => 'select',
			'choices'         => slick_blog_get_post_choices(),
		)
	);

}
