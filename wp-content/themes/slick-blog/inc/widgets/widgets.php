<?php

// Popular Posts Widget.
require get_template_directory() . '/inc/widgets/popular-posts-widget.php';

// Trending Posts Widget.
require get_template_directory() . '/inc/widgets/trending-posts-widget.php';

// Slider Widget.
require get_template_directory() . '/inc/widgets/slider-widget.php';

// Author Info Widget.
require get_template_directory() . '/inc/widgets/info-author-widget.php';

// Social Icons Widget.
require get_template_directory() . '/inc/widgets/social-icons-widget.php';

/**
 * Register Widgets
 */
function slick_blog_register_widgets() {

	register_widget( 'Slick_Blog_Popular_Posts_Widget' );

	register_widget( 'Slick_Blog_Trending_Posts_Widget' );

	register_widget( 'Slick_Blog_Slider_Widget' );

	register_widget( 'Slick_Blog_Author_Info_Widget' );

	register_widget( 'Slick_Blog_Social_Icons_Widget' );

}
add_action( 'widgets_init', 'slick_blog_register_widgets' );
