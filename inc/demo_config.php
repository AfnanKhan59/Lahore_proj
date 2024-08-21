<?php
// Disable regenerating images while importing media
add_filter( 'ocdi/regenerate_thumbnails_in_content_import', '__return_false' );
add_filter( 'ocdi/disable_pt_branding', '__return_true' );

// Change some options for the jQuery modal window
function enpix_ocdi_confirmation_dialog_options( $options ) {
	return array_merge(
		$options,
		[
			'width'       => 400,
			'dialogClass' => 'wp-dialog',
			'resizable'   => false,
			'height'      => 'auto',
			'modal'       => true,
		]
	);
}

add_filter( 'ocdi/confirmation_dialog_options', 'enpix_ocdi_confirmation_dialog_options', 10, 1 );

function enpix_ocdi_intro_text( $default_text ) {
	$default_text .= '<div class="ocdi_custom-intro-text notice notice-info inline">';
	$default_text .= sprintf(
		'%1$s <a href="%2$s" target="_blank">%3$s</a> %4$s',
		esc_html__( 'Install and activate all ', 'enpix' ),
		get_admin_url( null, 'themes.php?page=tgmpa-install-plugins' ),
		esc_html__( 'required plugins', 'enpix' ),
		esc_html__( 'before you click on the "Import" button.', 'enpix' )
	);

	$default_text .= sprintf(
		'<br> %1$s <a href="%2$s" target="_blank">%3$s</a> %4$s',
		esc_html__( 'After importing a demo, you will find all the pages in ', 'enpix' ),
		get_admin_url( null, 'edit.php?post_type=page' ),
		esc_html__( 'Pages.', 'enpix' ),
		esc_html__( 'Other pages will be imported along with the main Homepage demo.', 'enpix' )
	);
	$default_text .= '<br>';
	$default_text .= sprintf(
		'%1$s <a href="%2$s" target="_blank">%3$s</a>',
		esc_html__( 'If you fail to import the demo data, follow the alternative way', 'enpix' ),
		'https://is.gd/bk8F5p',
		esc_html__( 'here.', 'enpix' )
	);
	$default_text .= '</div>';

	return $default_text;
}

add_filter( 'ocdi/plugin_intro_text', 'enpix_ocdi_intro_text' );

// OneClick Demo Importer
add_filter( 'ocdi/import_files', 'enpix_import_files' );
function enpix_import_files() {
	return [
		[
			'import_file_name'         => esc_html__( 'Home', 'enpix' ),
			'local_import_file'        => trailingslashit( get_template_directory() ) . 'inc/demo/contents.xml',
			'local_import_widget_file' => trailingslashit( get_template_directory() ) . 'inc/demo/widgets.wie',
			'import_preview_image_url' => trailingslashit( get_template_directory_uri() ) . 'inc/demo/images/home_one.png',
			'preview_url'              => 'https://themes.themexplosion.com/enpix',
			'local_import_json'        => [
				[
					'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demo/settings.json',
					'option_name' => 'enpix_opt',
				],
			],
		],

		[
			'import_file_name'         => esc_html__( 'Home Two', 'enpix' ),
			'local_import_file'        => trailingslashit( get_template_directory() ) . 'inc/demo/contents.xml',
			'local_import_widget_file' => trailingslashit( get_template_directory() ) . 'inc/demo/widgets.wie',
			'import_preview_image_url' => trailingslashit( get_template_directory_uri() ) . 'inc/demo/images/home_two.jpg',
			'preview_url'              => 'https://themes.themexplosion.com/enpix/home-2/',
			'local_import_json'        => [
				[
					'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demo/settings.json',
					'option_name' => 'enpix_opt',
				],
			],
		],
	];
}

/**
 * Adding local_import_json for codestar framework.
 */
function enpix_after_content_import_execution( $selected_import_files, $import_files, $selected_index ) {

	if ( ! empty( $import_files[ $selected_index ]['local_import_json'] ) ) {
		foreach ( $import_files[ $selected_index ]['local_import_json'] as $import ) {
			$file_path = $import['file_path'];
			$file_raw  = OCDI\Helpers::data_from_file( $file_path );
			update_option( $import['option_name'], json_decode( $file_raw, true ) );
		}
	}

}

add_action( 'ocdi/after_content_import_execution', 'enpix_after_content_import_execution', 3, 99 );

function enpix_after_import_setup( $selected_import ) {

	// Assign menus to their locations.
	$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

	set_theme_mod(
		'nav_menu_locations',
		[
			'main_menu' => $main_menu->term_id,
		]
	);

	// Disable Elementor's Default Colors and Default Fonts
	update_option( 'elementor_disable_color_schemes', 'yes' );
	update_option( 'elementor_disable_typography_schemes', 'yes' );
	update_option( 'elementor_global_image_lightbox', '' );

	$front_page_id = get_page_by_title( 'Home' );

	// Assign front page and posts page (blog page).
	if ( 'Home' == $selected_import['import_file_name'] ) {
		$front_page_id = get_page_by_title( 'Home' );
	}

	if ( 'Home Two' == $selected_import['import_file_name'] ) {
		$front_page_id = get_page_by_title( 'Home 2' );
	}

	$blog_page_id = get_page_by_title( 'Blog' );

	// Set the home page and blog page
	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
	update_option( 'page_for_posts', $blog_page_id->ID );
}

add_action( 'ocdi/after_import', 'enpix_after_import_setup' );