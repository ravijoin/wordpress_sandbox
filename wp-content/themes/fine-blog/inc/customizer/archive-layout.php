<?php
/**
 * Archive Layout
 *
 * @package Fine Blog
 */

$wp_customize->add_section(
	'fine_blog_archive_layout',
	array(
		'title' => esc_html__( 'Archive Layout', 'fine-blog' ),
		'panel' => 'slick_blog_theme_options',
	)
);

// Archive Layout - Column layout.
$wp_customize->add_setting(
	'fine_blog_column_layout',
	array(
		'default'           => 'column-2',
		'sanitize_callback' => 'slick_blog_sanitize_select',
	)
);

$wp_customize->add_control(
	'fine_blog_column_layout',
	array(
		'label'   => esc_html__( 'Column Layout', 'fine-blog' ),
		'section' => 'fine_blog_archive_layout',
		'type'    => 'select',
		'choices' => array(
			'column-2' => __( 'Column 2', 'fine-blog' ),
			'column-3' => __( 'Column 3', 'fine-blog' ),
		),
	)
);
