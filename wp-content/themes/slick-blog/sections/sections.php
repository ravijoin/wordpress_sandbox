<?php
/**
 * Render homepage sections.
 */
function slick_blog_homepage_sections() {

	$homepage_sections = slick_blog_get_homepage_sections();

	$sorted_sections = array_keys( $homepage_sections );

	foreach ( $sorted_sections as $section ) {
		if ( in_array( $section, array_keys( $homepage_sections ) ) ) {
			require get_template_directory() . '/sections/' . $section . '.php';
		}
	}

}
