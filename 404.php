<?php
/**
 * The template for displaying 404 pages (not found).
 */

get_header();
$opt = get_option( 'enpix_opt' );

$img_404      = $opt['img_404'] ?? '';
$title_404    = $opt['title_404'] ?? __( 'We lost this page.', 'enpix' );
$subtitle_404 = $opt['subtitle_404'] ?? __( 'We searched high and low but couldn’t find what you’re looking for. Let’s find a better place for you to go.', 'enpix' );
$error_button = $opt['button_text_404'] ?? __( 'Go Back Home', 'enpix' );

?>
<main>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="error-contents text-center pt-80 pb-100">
					<div class="error-image mb-30">
						<?php if ( ! empty( $img_404 ) ) : ?>
							<img src="<?php echo esc_url( $img_404 ); ?>" alt="<?php echo esc_attr_e( 'error 404', 'enpix' ); ?>" />
						<?php endif; ?>
					</div>
				</div>
				<div class="error-description mb-60">
					<?php if ( ! empty( $title_404 ) ) : ?>
						<h2 class="mb-30"><?php echo esc_html( $title_404 ); ?></h2>
					<?php endif; ?>

					<p class="enpix-body-text-1">
						<?php
						if ( ! empty( $subtitle_404 ) ) {
							echo wp_kses( $subtitle_404, enpix_allowed_html() );
						}
						?>
					</p>
				</div>

				<div class="error-cta">
					<a href="<?php echo esc_url( home_url() ); ?>" class="enpix-cta"><i class="fa-solid fa-arrow-left-long mr-10"></i> <?php echo esc_html( $error_button ); ?></a>
				</div>
			</div>
		</div>
	</div>
</main>

<?php
get_footer( 'empty' );
