<?php

if ( ! get_theme_mod( 'fine_blog_enable_post_carousel_section', false ) ) {
	return;
}

$carousel_content_ids  = array();
$carousel_content_type = get_theme_mod( 'fine_blog_post_carousel_content_type', 'post' );

if ( $carousel_content_type === 'post' ) {
	for ( $i = 1; $i <= 4; $i++ ) {
		$carousel_content_ids[] = get_theme_mod( 'fine_blog_post_carousel_content_post_' . $i );
	}
	$post_carousel_args = array(
		'post_type'           => 'post',
		'post__in'            => array_filter( $carousel_content_ids ),
		'orderby'             => 'post__in',
		'posts_per_page'      => absint( 4 ),
		'ignore_sticky_posts' => true,
	);
} else {
	$cat_content_id     = get_theme_mod( 'fine_blog_post_carousel_content_category' );
	$post_carousel_args = array(
		'cat'            => $cat_content_id,
		'posts_per_page' => absint( 4 ),
	);
}
$post_carousel_args = apply_filters( 'fine_blog_post_carousel_section_args', $post_carousel_args );

fine_blog_render_post_carousel_section( $post_carousel_args );

/**
 * Render Post Carousel Section.
 */
function fine_blog_render_post_carousel_section( $post_carousel_args ) {

	$query = new WP_Query( $post_carousel_args );
	if ( $query->have_posts() ) {
		?>

		<section id="fine_blog_post_carousel_section" class="post-carousel-section section-splitter">
			<?php
			if ( is_customize_preview() ) :
				fine_blog_section_link( 'fine_blog_post_carousel_section' );
			endif;
			?>
			<div class="section-wrapper">
				<div class="post-carousel slick-button">
					<?php
					while ( $query->have_posts() ) :
						$query->the_post();
						?>
						<div class="blog-post-container tile-layout">
							<div class="blog-post-inner">
								<div class="blog-post-image">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail( 'post-thumbnail' ); ?>
									</a>
								</div>
								<div class="blog-post-detail">
									<h3 class="post-main-title">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h3>
									<div class="post-meta">
										<span class="post-author">
											<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a>
										</span>
										<span class="post-date">
											<a href="<?php the_permalink(); ?>"></i><?php echo esc_html( get_the_date() ); ?></a>
										</span>
									</div>
								</div>
							</div>
						</div>
						<?php
					endwhile;
					wp_reset_postdata();
					?>
				</div>
			</div>
		</section>
		<?php
	}
}
