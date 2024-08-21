<!-- Top Bar -->
<div class="blog-grid-top-bar order-2">
	<!-- Filter Buttons -->
	<?php
	if ( ! empty( get_categories() ) ) :
		?>
		<div class="filter-buttons">
			<button class="selected" data-filter="*"><?php esc_html_e( 'All', 'enpix' ); ?></button>
			<?php
			$cats_array = get_categories(
				array(
					'orderby'    => 'name',
					'order'      => 'ASC',
					'hide_empty' => true,
				)
			);
			foreach ( $cats_array as $item ) :
				?>
				<button data-filter=".<?php echo esc_attr( $item->slug ); ?>"><?php echo esc_html( $item->name ); ?></button>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
	<!-- Search Form -->
	<div class="search-form">
		<?php
		$search_query = get_search_query() ? get_search_query() : '';
		?>
		<form action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search" method="get">
			<input type="text" name="s" placeholder="<?php echo esc_attr__( 'Search in Blog', 'enpix' ); ?>" value="<?php echo esc_attr( $search_query ); ?>">
			<button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
		</form>
	</div>
</div>
