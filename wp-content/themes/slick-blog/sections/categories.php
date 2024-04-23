<?php
if ( ! get_theme_mod( 'slick_blog_enable_categories_section', false ) ) {
	return;
}
$section_content = array();

$content_ids = array();
for ( $i = 1; $i <= 4; $i++ ) {
	$content_post_id = get_theme_mod( 'slick_blog_categories_content_category_' . $i );
	if ( ! empty( $content_post_id ) ) {
		$content_ids[] = $content_post_id;
	}
}
$args = array(
	'taxonomy'   => 'category',
	'number'     => 4,
	'include'    => array_filter( $content_ids ),
	'orderby'    => 'include',
	'hide_empty' => false,
);

$terms = get_terms( $args );
$i     = 1;
foreach ( $terms as $value ) {
	$data['title']         = $value->name;
	$data['permalink']     = get_term_link( $value->term_id );
	$data['thumbnail_url'] = get_theme_mod( 'slick_blog_category_category_image_' . $i, '' );
	array_push( $section_content, $data );
	$i++;
}

$section_content = apply_filters( 'slick_blog_categories_section_content', $section_content );

slick_blog_render_categories_section( $section_content );

/**
 * Render Categories Section
 */
function slick_blog_render_categories_section( $section_content ) {

	$categories_title = get_theme_mod( 'slick_blog_categories_title', __( 'Categories', 'slick-blog' ) );
	?>

	<section id="slick_blog_categories_section" class="categories-section section-splitter categories-style-1 column-4">
		<?php
		if ( is_customize_preview() ) :
			slick_blog_section_link( 'slick_blog_categories_section' );
		endif;
		?>
		<div class="section-wrapper">
			<?php if ( ! empty( $categories_title ) ) : ?>
				<div class="title-heading">
					<h3 class="main-title"><?php echo esc_html( $categories_title ); ?></h3>
				</div>
			<?php endif; ?>
			<div class="categories-container-wrapper column-4">
				<?php foreach ( $section_content as $content ) : ?>
					<div class="categories-container">
						<div class="categories-inner">
							<?php if ( ! empty( $content['thumbnail_url'] ) ) : ?>
								<div class="categories-image">
									<img src="<?php echo esc_url( $content['thumbnail_url'] ); ?>" alt="<?php echo esc_attr( $content['title'] ); ?>">
								</div>
							<?php endif; ?>
							<div class="categories-details">
								<h3 class="categories-title"><a href="<?php echo esc_url( $content['permalink'] ); ?>"><?php echo esc_html( $content['title'] ); ?></a></h3>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<?php
}
