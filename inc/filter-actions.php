<?php
// Image sizes.
add_image_size( 'enpix_595x391', 595, 391, true ); //Blog page posts.
add_image_size( 'enpix_blog_list', 868, 579, true ); //Blog list posts.
add_image_size( 'enpix_740x431', 740, 431, true ); //Sticky post.
add_image_size( 'enpix_135x135', 135, 135, true ); // Team tab image.
add_image_size( 'enpix_397x400', 397, 400, true ); // Team Details featured image.
add_image_size( 'enpix_1320x512', 1320, 512, true ); // Project thumbnail in single page.
add_image_size( 'enpix_630x401', 630, 401, true ); // Project thumbnail in single page.

/**
 * Body classes
 */
add_filter(
	'body_class',
	function ( $classes ) {
		$opt    = get_option( 'enpix_opt' );
		$header = $opt['header-style'] ?? '';

		$classes[] = 'enpix-bg-1';

		if ( $header == 'header-2' ) {
			$classes[] = 'home-2';
		}

		return $classes;
	}
);

// Elementor post type support.
function enpix_add_cpt_support() {
	// if exists, assign to $cpt_support var.
	$cpt_support = get_option( 'elementor_cpt_support' );

	// check if option DOESN'T exist in db.
	if ( ! $cpt_support ) {
		$cpt_support = [ 'page', 'post' ]; // create array of our default supported post types.
		update_option( 'elementor_cpt_support', $cpt_support ); // write it to the database.
	} // if it DOES exist, but header is NOT defined.
}

add_action( 'after_switch_theme', 'enpix_add_cpt_support' );

/**
 * Customizing excerpt suffix.
 */
function enpix_excerpt_more() {
	return '...';
}
add_filter( 'excerpt_more', 'enpix_excerpt_more' );
