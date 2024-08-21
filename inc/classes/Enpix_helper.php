<?php
/**
 * Enpix theme helper functions and resources
 */

class Enpix_helper {
	/**
	 * Hold an instance of enpix_helper class.
	 *
	 * @var enpix_helper
	 */
	protected static $instance = null;

	/**
	 * Main enpix_helper instance.
	 *
	 * @return enpix_helper - Main instance.
	 */
	public static function instance() {

		if ( null === self::$instance ) {
			self::$instance = new enpix_helper();
		}

		return self::$instance;
	}

	/**
	 * Website Logo
	 */
	public function logo() {
		$opt  = get_option( 'enpix_opt' );
		$meta = get_post_meta( get_the_ID(), 'page_options', true );

		$blog_name = get_bloginfo( 'name' );

		// Global Logo.
		$global_main_logo   = $opt['main_logo']['url'] ?? '';
		$global_retina_logo = ! empty( $opt['retina_logo']['url'] ) ? "srcset='{$opt['retina_logo']['url']} 2x'" : '';

		// Logo selection.
		$main_logo   = $meta['page_main_logo']['url'] ?? $global_main_logo;
		$retina_logo = $meta['page_retina_logo']['url'] ?? $global_retina_logo;
		?>
		<div class="logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<?php if ( ! empty( $main_logo ) ) : ?>
				<img src="<?php echo esc_url( $main_logo ); ?>" <?php echo wp_kses( $retina_logo, enpix_allowed_html() ); ?> alt="<?php echo esc_attr( $blog_name ); ?>">
			<?php else : ?>
				<h3> <?php echo esc_html( get_bloginfo( 'name' ) ); ?> </h3>
			<?php endif; ?>
			</a>
		</div>
		<?php
	}

	/**
	 * Limit letter
	 *
	 * @param $string
	 * @param $limit_length
	 * @param string       $suffix
	 */
	function limit_letter( $string, $limit_length, $suffix = '...' ) {
		if ( strlen( $string ) > $limit_length ) {
			echo strip_shortcodes( substr( $string, 0, $limit_length ) . $suffix );
		} else {
			echo strip_shortcodes( esc_html( $string ) );
		}
	}
}

/**
 * Instance of enpix_helper class
 */
function enpix_helper() {
	return Enpix_helper::instance();
}
