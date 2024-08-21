<?php
/**
 * Register Google fonts.
 *
 * @return string Google fonts URL for the theme.
 */
function enpix_fonts_url() {
	$fonts_url = '';
	$fonts     = [];
	$subsets   = 'swap';

	/* Translators: Translate on to off if following font is not fully compatible with your language */
	if ( 'off' !== esc_html_x( 'on', 'Inter font: on or off', 'enpix' ) ) {
		$fonts[] = 'Inter:wght@300;400';
	}

	if ( 'off' !== esc_html_x( 'on', 'Jost font: on or off', 'enpix' ) ) {
		$fonts[] = 'Jost:wght@400;500;600;700';
	}

	$is_ssl = is_ssl() ? 'https' : 'http';

	if ( $fonts ) {
		$fonts_url = add_query_arg(
			[
				'family'  => implode( '&family=', $fonts ),
				'display' => rawurlencode( $subsets ),
			],
			"$is_ssl://fonts.googleapis.com/css2"
		);
	}

	return $fonts_url;
}

/**
 * Enqueue site scripts and styles
 */
function enpix_scripts() {
	/**
	 * Registering site's scripts and styles
	 */
	wp_enqueue_style( 'enpix-fonts', enpix_fonts_url(), [], null );
	wp_enqueue_style( 'fontawesome', ENPIX_DIR_VENDOR . 'font-awesome/css/all.min.css' );
	wp_enqueue_style( 'normalize', ENPIX_DIR_VENDOR . 'normalize/normalize.css' );
	wp_enqueue_style( 'bootstrap', ENPIX_DIR_VENDOR . 'bootstrap/bootstrap.min.css' );
	wp_enqueue_style( 'splide', ENPIX_DIR_VENDOR . 'splide/splide.min.css' );
	wp_enqueue_style( 'animate', ENPIX_DIR_VENDOR . 'animate/animate.min.css' );
	wp_enqueue_style( 'magnific-popup', ENPIX_DIR_VENDOR . '/magnific-popup/magnific-popup.css' );
	wp_enqueue_style( 'mmenu-light', ENPIX_DIR_VENDOR . 'mmenu-light/mmenu-light.css' );
	wp_enqueue_style( 'enpix-preloader', ENPIX_DIR_CSS . 'preloader.css' );
	wp_enqueue_style( 'enpix-main', ENPIX_DIR_CSS . 'main.css' );
	wp_enqueue_style( 'enpix-custom', ENPIX_DIR_CSS . 'custom.css' );
	wp_enqueue_style( 'enpix-wpd', ENPIX_DIR_CSS . 'wpd-style.css' );
	wp_enqueue_style( 'enpix-root', get_stylesheet_uri() );

	/**
	 * JavaScripts
	 */
	wp_enqueue_script( 'fontawesome', ENPIX_DIR_VENDOR . 'font-awesome/js/all.min.js', [ 'jquery' ], '6.1.1', true );
	wp_enqueue_script( 'bootstrap', ENPIX_DIR_VENDOR . 'bootstrap/bootstrap.min.js', [ 'jquery' ], '5.1.3', true );
	wp_enqueue_script( 'jquery-appear', ENPIX_DIR_VENDOR . 'counter/jquery.appear.js', [ 'jquery' ], '1.0.0', true );
	wp_enqueue_script( 'jquery-count-to', ENPIX_DIR_VENDOR . 'counter/jquery.countTo.js', [ 'jquery' ], '1.0.0', true );
	wp_enqueue_script( 'magnific-popup', ENPIX_DIR_VENDOR . 'magnific-popup/magnific-popup.js', [ 'jquery' ], '1.1.0', true );
	wp_enqueue_script( 'mmenu-light', ENPIX_DIR_VENDOR . 'mmenu-light/mmenu-light.min.js', [ 'jquery' ], '1.0.0', true );
	wp_enqueue_script( 'isotope', ENPIX_DIR_VENDOR . 'isotope/isotope.pkgd.min.js', [ 'jquery' ], '3.0.6', false );
	wp_enqueue_script( 'splide', ENPIX_DIR_VENDOR . 'splide/splide.min.js', [ 'jquery' ], '4.1.3', false );
	wp_enqueue_script( 'wow', ENPIX_DIR_VENDOR . 'animate/wow.min.js', [ 'jquery' ], '1.3.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'enpix-main', ENPIX_DIR_JS . 'main.js', [ 'jquery' ], '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'enpix_scripts' );

/**
 * Style for showing on Gutenberg block back end.
 *
 * @return void
 */
function enpix_block_styles() {
	wp_enqueue_style( 'enpix-fonts', enpix_fonts_url(), [], '1.0' );
}

add_action( 'enqueue_block_assets', 'enpix_block_styles' );
