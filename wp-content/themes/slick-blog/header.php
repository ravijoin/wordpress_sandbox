<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Slick_Blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'slick-blog' ); ?></a>

		<div id="loader" class="loader-1">
			<div class="loader-container">
				<div id="preloader">
				</div>
			</div>
		</div><!-- #loader -->

		<header id="masthead" class="site-header">

			<div class="slick-blog-top-header">
				<?php if ( ! empty( get_header_image() ) ) : ?>
					<div class="header-bg-image">
						<img src="<?php echo esc_url( get_header_image() ); ?>" alt="<?php esc_attr_e( 'Header Image', 'slick-blog' ); ?>">
					</div>	
				<?php endif; ?>
				<div class="section-wrapper">
					<div class="slick-blog-top-header-wrapper">
						<div class="site-branding">
							<div class="site-logo">
								<?php the_custom_logo(); ?>
							</div>
							<div class="site-identity">
								<?php
								if ( is_front_page() && is_home() ) :
									?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
									<?php
							else :
								?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								<?php
							endif;
							$slick_blog_description = get_bloginfo( 'description', 'display' );
							if ( $slick_blog_description || is_customize_preview() ) :
								?>
								<p class="site-description"><?php echo $slick_blog_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
							<?php endif; ?>
						</div>	
					</div>
				</div>	
			</div>	
		</div>		
		<!-- end of site-branding -->

		<div class="slick-blog-navigation">
			<div class="section-wrapper"> 
				<div class="slick-blog-navigation-container">
					<div class="header-social-icon">
						<div class="header-social-icon-container">
							<?php
							if ( has_nav_menu( 'social' ) ) {
								wp_nav_menu(
									array(
										'container'      => 'ul',
										'menu_class'     => 'social-links',
										'theme_location' => 'social',
										'link_before'    => '<span class="screen-reader-text">',
										'link_after'     => '</span>',
									)
								);
							}
							?>
						</div>
					</div>
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<span class="ham-icon"></span>
							<span class="ham-icon"></span>
							<span class="ham-icon"></span>
							<i class="fa fa-bars" aria-hidden="true"></i>
						</button>
						<div class="navigation-area">
							<?php
							if ( has_nav_menu( 'primary' ) ) {

								wp_nav_menu(
									array(
										'theme_location' => 'primary',
										'menu_id'        => 'primary-menu',
									)
								);
							}
							?>
						</div>
					</nav><!-- #site-navigation -->
					<div class="slick-blog-header-search">
						<div class="header-search-wrap">
							<a href="#" class="search-icon"><i class="fa fa-search" aria-hidden="true"></i></a>
							<div class="header-search-form">
								<?php get_search_form(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header><!-- #masthead -->

	<?php
	if ( ! is_front_page() || is_home() ) {
		if ( is_front_page() ) {

			require get_template_directory() . '/sections/sections.php';
			slick_blog_homepage_sections();

		}
		?>
		<div class="slick-blog-main-wrapper">
			<div class="section-wrapper">
				<div class="slick-blog-container-wrapper">
				<?php } ?>
