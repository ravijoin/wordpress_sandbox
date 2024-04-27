<?php

/**
 * Active Callbacks
 *
 * @package Slick_Blog
 */

// Theme Options.
function slick_blog_is_pagination_enabled( $control ) {
	return ( $control->manager->get_setting( 'slick_blog_enable_pagination' )->value() );
}
function slick_blog_is_breadcrumb_enabled( $control ) {
	return ( $control->manager->get_setting( 'slick_blog_enable_breadcrumb' )->value() );
}

// Banner Slider Section.
function slick_blog_is_slider_section_enabled( $control ) {
	return ( $control->manager->get_setting( 'slick_blog_enable_slider_section' )->value() );
}
function slick_blog_is_slider_section_and_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'slick_blog_slider_content_type' )->value();
	return ( slick_blog_is_slider_section_enabled( $control ) && ( 'post' === $content_type ) );
}
function slick_blog_is_slider_section_and_content_type_page_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'slick_blog_slider_content_type' )->value();
	return ( slick_blog_is_slider_section_enabled( $control ) && ( 'page' === $content_type ) );
}

// Categories Section.
function slick_blog_is_categories_section_enabled( $control ) {
	return ( $control->manager->get_setting( 'slick_blog_enable_categories_section' )->value() );
}

// Featured Posts Section.
function slick_blog_is_featured_posts_section_enabled( $control ) {
	return ( $control->manager->get_setting( 'slick_blog_enable_featured_posts_section' )->value() );
}
function slick_blog_is_featured_posts_section_and_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'slick_blog_featured_posts_content_type' )->value();
	return ( slick_blog_is_featured_posts_section_enabled( $control ) && ( 'post' === $content_type ) );
}
function slick_blog_is_featured_posts_section_and_content_type_category_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'slick_blog_featured_posts_content_type' )->value();
	return ( slick_blog_is_featured_posts_section_enabled( $control ) && ( 'category' === $content_type ) );
}
