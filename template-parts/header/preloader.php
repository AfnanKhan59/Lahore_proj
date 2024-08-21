<?php
/**
 * Values imported from theme settings.
 */
$opt            = get_option( 'enpix_opt' );
$preloader_text = ! empty( $opt['preloader_text'] ) ? $opt['preloader_text'] : '';
wp_enqueue_script( 'preloader' );
?>

<div id="preloader">
	<div class="ctn-preloader" id="ctn-preloader">
		<div class="animation-preloader">
			<div class="spinner"></div>
			<div class="txt-loading">
				<?php
				if ( ! empty( $preloader_text ) ) {
					$preloader_text_array = str_split( $preloader_text, 1 );

					foreach ( $preloader_text_array as $value ) {
						echo '<span class="letters-loading" data-text-preloader="' . esc_attr( $value ) . '"> ' . esc_html( $value ) . ' </span>';
					}
				}
				?>
			</div>
		</div>
	</div>
</div>
