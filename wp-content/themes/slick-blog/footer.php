<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Slick_Blog
 */

if ( ! is_front_page() || is_home() ) {
	?>
</div>
</div>
</div>
	<?php
}

?>

<!-- start of footer -->
<footer class="site-footer">
	<div class="section-wrapper">
		<?php
		if ( is_active_sidebar( 'footer-widget' ) || is_active_sidebar( 'footer-widget-2' ) || is_active_sidebar( 'footer-widget-3' ) || is_active_sidebar( 'footer-widget-4' ) ) :
			?>
		<div class="slick-blog-middle-footer">
			<div class="middle-footer-wrapper">

				<?php for ( $i = 1; $i <= 4; $i++ ) { ?>

					<div class="footer-container-wrapper">
						<div class="footer-content-inside">
							<?php dynamic_sidebar( 'footer-widget-' . $i ); ?>
						</div>
					</div>

				<?php } ?>
			</div>	
		</div>
	<?php endif; ?>
	
	<div class="slick-blog-bottom-footer">
		<div class="bottom-footer-content">
			<?php
				/**
				 * Hook: slick_blog_footer_copyright.
				 *
				 * @hooked - slick_blog_output_footer_copyright_content - 10
				 */
				do_action( 'slick_blog_footer_copyright' );
			?>
			</div>
		</div>
	</div>

</footer>
<!-- end of brand footer -->

<?php
$is_scroll_top_active = get_theme_mod( 'slick_blog_scroll_top', true );
if ( $is_scroll_top_active ) :
	?>

	<a href="#" class="scroll-to-top"></a>

	<?php
endif;
?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
