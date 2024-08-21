<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package enpix
 */

// Theme settings options.
$opt   = get_option( 'enpix_opt' );
$meta  = get_post_meta( get_the_ID(), 'page_options', true );
$enpix = wp_get_theme( 'enpix' );

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<!-- Theme Version -->
		<meta name="theme-version" content="<?php echo esc_attr( $enpix->version ); ?>">
		<!-- Charset Meta -->
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?> data-scroll-animation="true">
<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}

// Preloader.
$is_preloader = $opt['is_preloader'] ?? '';

if ( did_action( 'elementor/loaded' ) ) {
	if ( \Elementor\Plugin::$instance->preview->is_preview_mode() ) {
		$is_preloader = '';
	}
}

if ( $is_preloader ) {
	get_template_part( 'template-parts/header/preloader' );
}

$global_header_layout = $opt['header_layout'] ?? 1;
$page_header_layout   = $meta['page_header_layout'] ?? $global_header_layout;

get_template_part( 'template-parts/header/layouts/layout', $page_header_layout );
