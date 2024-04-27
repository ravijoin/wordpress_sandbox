<?php
/**
 * Theme Customizer
 *
 * @package Fine_Blog
 */

function fine_blog_customize_register( $wp_customize ) {

	require get_theme_file_path() . '/inc/customizer/post-carousel.php';

	require get_theme_file_path() . '/inc/customizer/archive-layout.php';

	// Upsell Section.
	$wp_customize->add_section(
		new Fine_Blog_Upsell_Section(
			$wp_customize,
			'upsell_sections',
			array(
				'title'            => __( 'Fine Blog', 'fine-blog' ),
				'button_text'      => __( 'Buy Pro', 'fine-blog' ),
				'url'              => 'https://ascendoor.com/themes/fine-blog-pro/',
				'background_color' => '#e18d62',
				'text_color'       => '#fff',
				'priority'         => 0,
			)
		)
	);

}
add_action( 'customize_register', 'fine_blog_customize_register' );

function fine_blog_customize_preview_js() {
	// Append .min if SCRIPT_DEBUG is false.
	$min = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	wp_enqueue_script( 'fine-blog-customizer', get_stylesheet_directory_uri() . '/assets/js/customizer' . $min . '.js', array( 'slick-blog-customizer', 'customize-preview' ), '1.0.0', true );
}
add_action( 'customize_preview_init', 'fine_blog_customize_preview_js' );

function fine_blog_custom_control_scripts() {
	// Append .min if SCRIPT_DEBUG is false.
	$min = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	wp_enqueue_style( 'fine-blog-custom-controls-css', get_stylesheet_directory_uri() . '/assets/css/custom-controls' . $min . '.css', array( 'slick-blog-custom-controls-css' ), '1.0.0', 'all' );
	wp_enqueue_script( 'fine-blog-custom-controls-js', get_stylesheet_directory_uri() . '/assets/js/custom-controls' . $min . '.js', array( 'slick-blog-custom-controls-js', 'jquery', 'jquery-ui-core' ), '1.0.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'fine_blog_custom_control_scripts' );

/*=====================Active Callback=================*/

// Posts Carousel Section.
function fine_blog_is_post_carousel_section_enabled( $control ) {
	return ( $control->manager->get_setting( 'fine_blog_enable_post_carousel_section' )->value() );
}
function fine_blog_is_post_carousel_section_and_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'fine_blog_post_carousel_content_type' )->value();
	return ( fine_blog_is_post_carousel_section_enabled( $control ) && ( 'post' === $content_type ) );
}
function fine_blog_is_post_carousel_section_and_content_type_category_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'fine_blog_post_carousel_content_type' )->value();
	return ( fine_blog_is_post_carousel_section_enabled( $control ) && ( 'category' === $content_type ) );
}
