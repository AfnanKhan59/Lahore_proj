<?php
$opt   = get_option( 'enpix_opt' );
$enpix = wp_get_theme( 'enpix' );

$frontpage_class = is_front_page() ? '' : 'page-header';

$is_header_search          = $opt['header_search']['is_header_search'] ?? '';
$header_search_title       = $opt['header_search']['header_search_title'] ?? '';
$header_search_placeholder = $opt['header_search']['header_search_placeholder'] ?? '';

$is_floating_sidebar = $opt['header_sidebar']['is_floating_sidebar'] ?? '';
$fs_description      = $opt['header_sidebar']['fs_description'] ?? '';
$fs_email            = $opt['header_sidebar']['fs_contact_info']['email'] ?? '';
$fs_phone            = $opt['header_sidebar']['fs_contact_info']['phone'] ?? '';
$header_fs_socials   = $opt['header_sidebar']['fs_socials'] ?? '';
$fs_social_title     = $opt['header_sidebar']['fs_social_title'] ?? '';

?>
<header class="enpix-header enpix-header-2 p-0 <?php echo esc_attr( $frontpage_class ); ?>">
	<div class="container">
		<div class="header-2-container">
			<div class="row">
				<div class="col-xl-2 col-9">
					<?php enpix_helper()->logo(); ?>
				</div>
				<div class="col-xl-8 col-3 d-flex align-items-center justify-content-center">
					<a class="menu-opener ml-auto d-xl-none" href="#menu">
						<i class="fa-solid fa-bars"></i>
					</a>
					<nav id="menu" class="site-menu">
						<?php
						if ( has_nav_menu( 'main_menu' ) ) {
							wp_nav_menu(
								[
									'menu'           => 'main_menu',
									'theme_location' => 'main_menu',
									'container'      => null,
									'menu_class'     => 'navbar-nav menu ms-auto',
									'walker'         => new Enpix_Nav_Walker(),
									'depth'          => 4,
								]
							);
						}
						?>
					</nav>
				</div>
				<div class="col-xl-2 d-xl-flex d-none align-items-center justify-content-end">
					<?php if ( $is_header_search ) : ?>
						<button class="header-search-button">
							<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M9.875 0.375C8.74219 0.375 7.69401 0.661458 6.73047 1.23438C5.77995 1.78125 5.03125 2.52995 4.48438 3.48047C3.91146 4.44401 3.625 5.49219 3.625 6.625C3.625 7.36719 3.7487 8.07682 3.99609 8.75391C4.24349 9.41797 4.58854 10.0234 5.03125 10.5703L0.0507812 15.5508L0.949219 16.4492L5.92969 11.4688C6.47656 11.9115 7.08203 12.2565 7.74609 12.5039C8.42318 12.7513 9.13281 12.875 9.875 12.875C11.0078 12.875 12.056 12.5885 13.0195 12.0156C13.9701 11.4688 14.7188 10.7201 15.2656 9.76953C15.8385 8.80599 16.125 7.75781 16.125 6.625C16.125 5.49219 15.8385 4.44401 15.2656 3.48047C14.7188 2.52995 13.9701 1.78125 13.0195 1.23438C12.056 0.661458 11.0078 0.375 9.875 0.375ZM9.875 1.625C10.7865 1.625 11.6198 1.85286 12.375 2.30859C13.1432 2.7513 13.7487 3.35677 14.1914 4.125C14.6471 4.88021 14.875 5.71354 14.875 6.625C14.875 7.53646 14.6471 8.3763 14.1914 9.14453C13.7487 9.89974 13.1432 10.5052 12.375 10.9609C11.6198 11.4036 10.7865 11.625 9.875 11.625C8.96354 11.625 8.1237 11.4036 7.35547 10.9609C6.60026 10.5052 5.99479 9.89974 5.53906 9.14453C5.09635 8.3763 4.875 7.53646 4.875 6.625C4.875 5.71354 5.09635 4.88021 5.53906 4.125C5.99479 3.35677 6.60026 2.7513 7.35547 2.30859C8.1237 1.85286 8.96354 1.625 9.875 1.625Z"
									fill="white" />
							</svg>
						</button>
					<?php endif; ?>
					<?php if ( $is_floating_sidebar ) : ?>
						<button class="side-opener">
							<i class="fa-solid fa-bars"></i>
						</button>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<?php if ( $is_header_search ) : ?>
		<div class="header-search-form">
			<div class="container">
				<h2><?php echo esc_html( $header_search_title ); ?></h2>
				<?php
				$search_query = get_search_query() ? get_search_query() : '';
				?>
				<form action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search" method="get">
					<input type="text" name="s" id="search" placeholder="<?php echo esc_attr( $header_search_placeholder ); ?>" value="<?php echo esc_attr( $search_query ); ?>">
				</form>
				<button class="form-close">x</button>
			</div>
		</div>
	<?php endif; ?>
	<?php if ( $is_floating_sidebar ) : ?>
		<div class="header-side-info-container">
			<div class="header-side-info">
				<button class="header-side-info-close">
					<i class="fa-solid fa-chevron-left"></i> <?php esc_html_e( 'Back', 'enpix' ); ?>
				</button>
				<?php if ( ! empty( $fs_description ) ) : ?>
					<div class="header-side-about mb-40">
						<p class="enpix-body-text-2">
							<?php echo wp_kses_post( $fs_description );	?>
						</p>
					</div>
				<?php endif; ?>
				<div>
					<div class="side-info-addresses">
						<?php if ( ! empty( $fs_email ) ) : ?>
							<div class="mb-20 d-flex align-items-center">
								<i class="fa-solid fa-envelope"></i>
								<a href="mailto:<?php echo esc_url( $fs_email ); ?>" class="enpix-body-text-2"><?php echo esc_html( $fs_email ); ?></a>
							</div>
						<?php endif; ?>
						<?php if ( ! empty( $fs_phone ) ) : ?>
							<div class="mb-20 d-flex align-items-center">
								<i class="fa-solid fa-headset"></i>
								<a href="tel:<?php echo esc_url( $fs_phone ); ?>" class="enpix-body-text-2"><?php echo esc_html( $fs_phone ); ?></a>
							</div>
						<?php endif; ?>
					</div>
					<?php if ( ! empty( $header_fs_socials ) ) : ?>
						<div class="mt-40">
							<?php
							if ( ! empty( $fs_social_title ) ) {
								echo '<p class="enpix-subtitle-3 mb-10">' . esc_html( $fs_social_title ) . '</p>';
							}
							?>
							<div class="social-icons-box">
								<?php
								foreach ( $header_fs_socials as $fs_social ) :
									?>
									<a href="<?php echo esc_url( $fs_social['social_link'] ); ?>"><i class="<?php echo esc_attr( $fs_social['social_icon'] ); ?>"></i></a>
								<?php endforeach; ?>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
</header>
