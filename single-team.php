<?php
get_header();
$opt = get_option( 'enpix_opt' );

$meta         = get_post_meta( get_the_ID(), 'team-meta', true );
$social_links = $meta['team-social-icons'] ?? [];
$designation  = $meta['member-designation'] ?? '';
?>
	<main>
		<div class="container">
			<div class="team-details pt-130 pb-130">
				<div class="row">
					<div class="col-xl-4">
						<div class="team-details-image">
							<?php
							if ( has_post_thumbnail() ) {
								the_post_thumbnail( 'enpix_397x400' );
							} else {
								?>
									<img src="<?php echo esc_url( ENPIX_DIR_IMG . 'svg/user.svg' ); ?>">
								<?php
							}
							?>
						</div>
					</div>
					<div class="col-xl-7 offset-xl-1">
						<div class="row mb-50">
							<div class="col-xl-8">
								<h1 class="heading-3"><?php the_title(); ?></h1>
								<p class="enpix-subtitle-1 m-0"><?php echo esc_html( $designation ); ?></p>
							</div>
							<div class="col-xl-4">
								<div class="team-social-info">
									<?php foreach ( $social_links as $social_link ) : ?>
										<a <?php echo ! empty( $social_link['social-link']['url'] ) ? 'href="' . esc_url( $social_link['social-link']['url'] ) . '"' : ''; ?> <?php echo ! empty( $social_link['social-link']['target'] ) ? 'target="' . esc_url( $social_link['social-link']['target'] ) . '"' : ''; ?>>
											<i class="<?php echo esc_attr( $social_link['social-icon'] ); ?>"></i>
										</a>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</main>

<?php
get_footer();
