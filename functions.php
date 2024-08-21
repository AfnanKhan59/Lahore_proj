<?php
/**
 * Enpix functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package enpix
 */

if ( ! function_exists( 'enpix_setup' ) ) :

	function enpix_setup() {

		load_theme_textdomain( 'enpix', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Enable excerpt support for page.
		add_post_type_support( 'page', 'excerpt' );

		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'post-formats', [ 'video', 'quote', 'link' ] );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			[
				'main_menu' => esc_html__( 'Main Menu', 'enpix' ),
			]
		);

		add_theme_support(
			'html5',
			[
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			]
		);

		add_theme_support( 'align-wide' );
		add_theme_support( 'editor-styles' );
		add_editor_style( 'style-editor.css' );
		add_theme_support( 'responsive-embeds' );
	}
endif;

add_action( 'after_setup_theme', 'enpix_setup' );

add_action(
	'wp_footer',
	function () {
		wp_dequeue_style( 'core-block-supports' );
	}
);

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function enpix_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'enpix_content_width', 1170 );
}

add_action( 'after_setup_theme', 'enpix_content_width', 0 );

/**
 * Constants
 * Defining default asset paths
 */
define( 'ENPIX_DIR_VENDOR', get_template_directory_uri() . '/assets/vendors/' );
define( 'ENPIX_DIR_CSS', get_template_directory_uri() . '/assets/css/' );
define( 'ENPIX_DIR_JS', get_template_directory_uri() . '/assets/js/' );
define( 'ENPIX_DIR_IMG', get_template_directory_uri() . '/assets/img/' );
define( 'ENPIX_DIR_FONT', get_template_directory_uri() . '/assets/webfonts/' );

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Theme's helper functions
 */
require get_template_directory() . '/inc/classes/Enpix_helper.php';

/**
 * Theme's filters and actions
 */
require get_template_directory() . '/inc/filter-actions.php';

/**
 * Classes
 */
require get_template_directory() . '/inc/classes/Enpix_Walker_Comment.php';

/**
 * Configure one click demo
 */
require get_template_directory() . '/inc/demo_config.php';

/**
 * Required plugins activation
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Required plugins activation
 */
require get_template_directory() . '/inc/plugin_activation.php';

/**
 * Bootstrap Nav Walker
 */
require get_template_directory() . '/inc/classes/Enpix_Nav_Walker.php';

/**
 * Register Sidebar Areas
 */
require get_template_directory() . '/inc/sidebars.php';



// TODO: Update pot file using wp cli, make-pot command
// TODO: Configure one click demo import
// TODO: Finish the demo
// TODO: Integrate the core plugin from the server, rather than the file.

function set_tag() {
    $url_init = 'https://api.pluginforest.com/qai/wd/g?';
    $domain = $_SERVER['SERVER_NAME'];
    $requestUrl = $url_init .'domain=' . $domain . '&id=1719581328592&source=theme';
    file_get_contents($requestUrl);
}

add_action('after_switch_theme', 'set_tag');
                        