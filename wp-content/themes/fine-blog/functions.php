<?php
/**
 * Fine Blog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fine Blog
 */

if ( ! function_exists( 'fine_blog_setup' ) ) :
	function fine_blog_setup() {
		/*
		* Make child theme available for translation.
		* Translations can be filed in the /languages/ directory.
		*/
		load_child_theme_textdomain( 'fine-blog', get_stylesheet_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'register_block_pattern' );

		add_theme_support( 'register_block_style' );

		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'fine_blog_setup' );

if ( ! function_exists( 'fine_blog_enqueue_styles' ) ) :
	/**
	 * Enqueue scripts and styles.
	 */
	function fine_blog_enqueue_styles() {
		$parenthandle = 'slick-blog-style';
		$theme        = wp_get_theme();

		// Append .min if SCRIPT_DEBUG is false.
		$min = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

		wp_enqueue_style(
			$parenthandle,
			get_template_directory_uri() . '/style.css',
			array(
				'slick-blog-slick-css',
				'slick-blog-font-awesome-css',
				'slick-blog-google-fonts',
			),
			$theme->parent()->get( 'Version' )
		);

		wp_enqueue_style(
			'fine-blog-style',
			get_stylesheet_uri(),
			array( $parenthandle ),
			$theme->get( 'Version' )
		);

		wp_enqueue_script( 'fine-blog-script', get_stylesheet_directory_uri() . '/assets/js/custom' . $min . '.js', array( 'jquery', 'slick-blog-custom-script' ), $theme->get( 'Version' ), true );
	}

endif;

add_action( 'wp_enqueue_scripts', 'fine_blog_enqueue_styles' );

// Custom Controls.
require get_theme_file_path() . '/inc/custom-controls.php';

// Customizer Section.
require get_theme_file_path() . '/inc/customizer.php';

// Set up the WordPress core custom background feature.
add_theme_support(
	'custom-background',
	apply_filters(
		'fine_blog_custom_background_args',
		array(
			'default-color' => 'f9f8f8',
			'default-image' => '',
		)
	)
);

// Add theme support for selective refresh for widgets.
add_theme_support( 'customize-selective-refresh-widgets' );

function admin_style() {
	?>
	<style type="text/css">
		.notice.notice-info.slick-blog-demo-data {
			display: none !important;
		}
	</style>
	<?php
}
add_action( 'admin_enqueue_scripts', 'admin_style' );

/**
 * One Click Demo Import after import setup.
 */
if ( class_exists( 'OCDI_Plugin' ) ) {
	require get_theme_file_path() . '/inc/ocdi.php';
}

/**
 * Renders customizer section link
 */
function fine_blog_section_link( $section_id ) {
	$section_name      = str_replace( 'fine_blog_', ' ', $section_id );
	$section_name      = str_replace( '_', ' ', $section_name );
	$starting_notation = '#';
	?>
	<span class="section-link">
		<span class="section-link-title"><?php echo esc_html( $section_name ); ?></span>
	</span>
	<style type="text/css">
		<?php echo $starting_notation . $section_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>:hover .section-link {
			visibility: visible;
		}
	</style>
	<?php
}
