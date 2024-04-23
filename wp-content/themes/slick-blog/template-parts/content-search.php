<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Slick_Blog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-post-container ">
		<div class="blog-post-inner">
			<div class="blog-post-image">
				<?php slick_blog_post_thumbnail(); ?>
			</div>
			<div class="blog-post-detail">
				<?php if ( 'post' === get_post_type() ) : ?>
					<div class="post-categories">
						<?php slick_blog_categories_list(); ?>
					</div>
				<?php endif; ?>
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="post-main-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
				?>
				<div class="post-meta">
					<?php
					slick_blog_posted_by();
					slick_blog_posted_on();
					?>
				</div>
				<div class="post-excerpt">
					<?php the_excerpt(); ?>
				</div>
				<?php
				$button_label = get_theme_mod( 'slick_blog_excerpt_readmore_button_label', __( 'Read More', 'slick-blog' ) );
				if ( ! empty( $button_label ) ) {
					?>
					<a href="<?php the_permalink(); ?>" class="read-more-btn">
						<span><?php echo esc_html( $button_label ); ?></span>
					</a>
				<?php } ?>
			</div>
		</div>
	</div>	
</article><!-- #post-<?php the_ID(); ?> -->
