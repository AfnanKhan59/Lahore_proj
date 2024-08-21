<?php
add_filter(
	'get_search_form',
	function ( $form ) {
		$value = get_search_query() ? get_search_query() : '';
		$form  = '<div class="widget search_widget">
                  <form action="' . esc_url( home_url( '/' ) ) . '" class="icon-input-group right-icon" >
                     <input type="search" name="s" class="form-control" placeholder="' . esc_attr__( 'Search', 'enpix' ) . '" value="' . esc_attr( $value ) . '">
                     <button type="submit"><i class="icon_search"></i></button>
                  </form>
              </div>';

		return $form;
	}
);
