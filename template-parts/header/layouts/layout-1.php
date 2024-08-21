<?php
$opt   = get_option( 'enpix_opt' );
$enpix = wp_get_theme( 'enpix' );

$is_cta       = $opt['cta_button']['is_cta'] ?? '';
$menu_columns = $is_cta ? 'col-xl-8' : 'col-xl-10';

$frontpage_class = is_front_page() ? '' : 'shadowed';
?>

<header class="enpix-header <?php echo esc_attr( $frontpage_class ); ?>">
	<div class="container">
		<div class="row">
			<div class="col-xl-2 col-9">
				<?php enpix_helper()->logo(); ?>
			</div>
			<div class="<?php echo esc_attr( $menu_columns ); ?> col-3 d-flex align-items-center">
				<a class="menu-opener ml-auto d-xl-none" href="#menu">
					<i class="fa-solid fa-bars"></i>
				</a>
				<nav id="menu" class="site-menu ml-auto">
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
			<?php
			if ( $is_cta ) :
				$cta_text   = $opt['cta_button']['cta_url']['text'];
				$cta_url    = $opt['cta_button']['cta_url']['url'];
				$cta_target = ! empty( $opt['cta_button']['cta_url']['target'] ) ? $opt['cta_button']['cta_url']['target'] : '_self';
				?>
				<div class="col-xl-2 d-xl-flex d-none align-items-center">
					<a href="<?php echo esc_url( $cta_url ); ?>" target="<?php echo esc_attr( $cta_target ); ?>" class="enpix-cta ml-auto"><?php echo esc_html( $cta_text ); ?></a>
				</div>
			<?php endif; ?>
		</div>
	</div>
</header>
