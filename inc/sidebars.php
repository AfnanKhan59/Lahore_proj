<?php
// Register Widget areas.
add_action(
	'widgets_init',
	function () {
		$opt = get_option( 'enpix_opt' );
		register_sidebar(
			[
				'name'          => esc_html__( 'Primary Sidebar', 'enpix' ),
				'description'   => esc_html__( 'Place widgets in sidebar widgets area.', 'enpix' ),
				'id'            => 'sidebar_widgets',
				'before_widget' => '<div id="%1$s" class="widget sidebar_widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2 class="enpix-subtitle-1">',
				'after_title'   => '</h2>',
			]
		);

		$footer_column = $opt['footer_column'] ?? '4';
		register_sidebar(
			[
				'name'          => esc_html__( 'Footer Widgets', 'enpix' ),
				'description'   => esc_html__( 'Add widgets here for Footer widgets area', 'enpix' ),
				'id'            => 'footer_widgets',
				'before_widget' => '<div id="%1$s" class="col-lg-' . ( 12 / $footer_column ) . ' col-md-6 col-12 mb-30">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2>',
				'after_title'   => '</h2>',
			]
		);
	}
);
