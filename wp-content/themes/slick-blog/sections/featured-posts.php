<?php

if ( ! get_theme_mod( 'slick_blog_enable_featured_posts_section', false ) ) {
	return;
}

$featured_posts_content_ids  = array();
$featured_posts_content_type = get_theme_mod( 'slick_blog_featured_posts_content_type', 'post' );

if ( $featured_posts_content_type === 'post' ) {
	for ( $i = 1; $i <= 5; $i++ ) {
		$featured_posts_content_ids[] = get_theme_mod( 'slick_blog_featured_posts_content_post_' . $i );
	}
	$featured_posts_args = array(
		'post_type'           => 'post',
		'post__in'            => array_filter( $featured_posts_content_ids ),
		'orderby'             => 'post__in',
		'posts_per_page'      => absint( 5 ),
		'ignore_sticky_posts' => true,
	);
} else {
	$cat_content_id      = get_theme_mod( 'slick_blog_featured_posts_content_category' );
	$featured_posts_args = array(
		'cat'            => $cat_content_id,
		'posts_per_page' => absint( 5 ),
	);
}
$featured_posts_args = apply_filters( 'slick_blog_featured_posts_section_args', $featured_posts_args );

slick_blog_render_featured_posts_section( $featured_posts_args );

/**
 * Render Featured Posts Section.
 */
function slick_blog_render_featured_posts_section( $featured_posts_args ) {
	$query = new WP_Query( $featured_posts_args );
	if ( $query->have_posts() ) {
		$featured_posts_title = get_theme_mod( 'slick_blog_featured_posts_section_title', __( 'Asia Travel Blog', 'slick-blog' ) );
		?>
		<section id="slick_blog_featured_posts_section" class="blog-featured-posts-section section-splitter featured-posts-style-1">
			<?php
			if ( is_customize_preview() ) :
				slick_blog_section_link( 'slick_blog_featured_posts_section' );
			endif;
			?>
			<div class="section-wrapper">
				<?php if ( ! empty( $featured_posts_title ) ) : ?>
					<div class="title-heading">
						<h3 class="main-title"><?php echo esc_html( $featured_posts_title ); ?></h3>
					</div>
				<?php endif; ?>
				<div class="blog-featured-posts-container-wrapper">
					<?php
					while ( $query->have_posts() ) :
						$query->the_post()
						?>
						<div class="blog-post-container">
							<div class="blog-post-inner">
								<div class="blog-post-image">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail( 'post-thumbnail' ); ?>
									</a>
								</div>
								<div class="blog-post-detail">
									<ul class="post-categories">
										<?php the_category( '', '', get_the_ID() ); ?>
									</ul>
									<h3 class="post-main-title">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h3>
									<div class="post-meta">
										<span class="post-author">
											<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a>
										</span>
										<span class="post-date">
											<a href="<?php the_permalink(); ?>"><?php echo esc_html( get_the_date() ); ?></a>
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
