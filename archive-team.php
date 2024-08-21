<?php
get_header();
$opt           = get_option( 'enpix_opt' );
$page_title    = $opt['team_page_title'] ?? __( 'Powerful Team', 'enpix' );
$page_subtitle = $opt['team_page_subtitle'] ?? __( 'Meet our talents team of creative, fun-lovers and magic makers.', 'enpix' );
$is_socials    = $opt['is_team_socials'] ?? true;
?>

<main class="enpix-bg-1 pb-130">
		<div class="container">
			<div class="page-header pt-120 pb-80 text-center">
				<?php if ( $page_title ) : ?>
					<h1 class="mb-30"><?php echo esc_html( $page_title ); ?></h1>
				<?php endif; ?>
				<?php if ( $page_subtitle ) : ?>
					<p class="enpix-subtitle-2"><?php echo wp_kses( $page_subtitle, enpix_allowed_html() ); ?></p>
				<?php endif; ?>
			</div>

			<div class="row">
			<?php
			$team_member = new WP_Query(
				[
					'post_type'      => 'team',
					'posts_per_page' => -1,
				]
			);

			while ( $team_member->have_posts() ) :
				$team_member->the_post();
				$meta         = get_post_meta( get_the_ID(), 'team-meta', true );
				$social_links = $meta['team-social-icons'] ?? [];
				$designation  = $meta['member-designation'] ?? '';
				?>
				<div class="col-md-4 col-sm-12 p-0 mb-40">
					<div class="team-member">
						<div class="member-image">
							<?php
							if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							} else {
								?>
								<img src="<?php echo esc_url( ENPIX_DIR_IMG . 'svg/user.svg' ); ?>">
								<?php
							}
							?>

							<?php if ( $is_socials ) : ?>
								<div class="member-social-info">
									<?php
									foreach ( $social_links as $social_link ) {
										?>
										<a <?php echo ! empty( $social_link['social-link']['url'] ) ? 'href="' . esc_url( $social_link['social-link']['url'] ) . '"' : ''; ?> <?php echo ! empty( $social_link['social-link']['target'] ) ? 'target="' . esc_url( $social_link['social-link']['target'] ) . '"' : ''; ?>>
											<i class="<?php echo esc_attr( $social_link['social-icon'] ); ?>"></i>
										</a>
										<?php
									}
									?>
								</div>
							<?php endif; ?>
						</div>
						<div class="member-details">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<p class="text-enpix-black-600"><?php echo esc_html( $designation ); ?></p>
						</div>
					</div>
				</div>
				<?php
			endwhile;
			wp_reset_postdata();
			?>
			</div>
		</div>
	</main>
	<?php
	get_footer();
