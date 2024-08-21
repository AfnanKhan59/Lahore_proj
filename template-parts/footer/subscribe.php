<?php

$opt = get_option( 'enpix_opt' );

$subscribe_text = $opt['subscribe_title'] ?? '';
$form_shortcode = $opt['mailchimp_form_shortcode'] ?? '';
?>

<div class="subscribe-form-area bg-white">
	<img src="<?php echo esc_url( ENPIX_DIR_IMG ); ?>/svg/Group34.svg" alt="enpix" class="subscribe-shape-circle">
	<div class="container">
		<div class="row">
			<div class="col-xl-5 col-lg-6">
				<h2 class="heading-3">
					<?php
					echo wp_kses(
						$subscribe_text,
						[
							'span' => [],
						]
					)
					?>
				</h2>
			</div>
			<div class="col-xl-7 col-lg-6 d-lg-flex align-items-center justify-content-end">
				<?php echo do_shortcode( $form_shortcode ); ?>
			</div>
		</div>
	</div>
</div>
