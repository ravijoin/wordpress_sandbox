<?php
/**
 * Footer Options
 *
 * @package Slick_Blog
 */

$wp_customize->add_section(
	'slick_blog_footer_options',
	array(
		'panel' => 'slick_blog_theme_options',
		'title' => esc_html__( 'Footer Options', 'slick-blog' ),
	)
);

// Footer Options - Copyright Text.
/* translators: 1: Year, 2: Site Title with home URL. */
$copyright_default = sprintf( esc_html_x( 'Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL', 'slick-blog' ), '[the-year]', '[site-link]' );
$wp_customize->add_setting(
	'slick_blog_footer_copyright_text',
	array(
		'default'           => $copyright_default,
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	'slick_blog_footer_copyright_text',
	array(
		'label'    => esc_html__( 'Copyright Text', 'slick-blog' ),
		'section'  => 'slick_blog_footer_options',
		'settings' => 'slick_blog_footer_copyright_text',
		'type'     => 'textarea',
	)
);

// Footer Options - Scroll Top.
$wp_customize->add_setting(
	'slick_blog_scroll_top',
	array(
		'sanitize_callback' => 'slick_blog_sanitize_switch',
		'default'           => true,
	)
);

$wp_customize->add_control(
	new Slick_Blog_Toggle_Switch_Custom_Control(
		$wp_customize,
		'slick_blog_scroll_top',
		array(
			'label'   => esc_html__( 'Enable Scroll Top Button', 'slick-blog' ),
			'section' => 'slick_blog_footer_options',
		)
	)
);
