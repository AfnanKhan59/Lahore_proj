<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package enpix
 */
// Get comment count text.
function enpix_comment_count( $post_id ) {
	$comments_number = get_comments_number( $post_id );

	if ( $comments_number == 0 ) {
		$comment_text = esc_html__( 'No Comments', 'enpix' );
	} elseif ( $comments_number == 1 ) {
		$comment_text = esc_html__( '1 Comment', 'enpix' );
	} elseif ( $comments_number > 1 ) {
		$comment_text = $comments_number . esc_html__( ' Comments', 'enpix' );
	}

	echo esc_html( $comment_text );
}

/**
 * Get a specific html tag from content
 *
 * @return String a specific HTML tag from the loaded content
 */
function enpix_get_html_tag( $tag = 'blockquote', $content = '' ) {
	$dom = new DOMDocument();
	$dom->loadHTML( $content );
	$divs = $dom->getElementsByTagName( $tag );
	$i    = 0;
	foreach ( $divs as $div ) {
		if ( $i == 1 ) {
			break;
		}
		echo "<h4 class='c_head'>{$div->nodeValue}</h4>";
		++ $i;
	}
}

/**
 * Arrow icon left right position
 */
function enpix_arrow_left_right() {
	$arrow_icon             = is_rtl() ? 'arrow_left' : 'arrow_right';
	is_404() && $arrow_icon = is_rtl() ? 'arrow_right' : 'arrow_left';

	echo esc_attr( $arrow_icon );
}

/**
 * Enpix post breadcrumbs
 */
function enpix_post_breadcrumbs() {
	$opt = get_option( 'enpix_opt' );
	if ( is_home() ) {
		$title = ! empty( $opt['blog_title'] ) ? $opt['blog_title'] : esc_html__( 'Blog', 'enpix' );
	} else {
		$title = get_the_title();
	}
	?>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <?php esc_html_e( 'Home', 'enpix' ); ?> </a>
			</li>
			<?php if ( ! is_archive() && ! is_home() && ! is_search() ) : ?>
				<li class="breadcrumb-item">
					<a href="<?php echo esc_url( get_post_type_archive_link( get_post_type( get_the_ID() ) ) ); ?>">
						<?php echo esc_html( ucwords( get_post_type( get_the_ID() ) ) ); ?>
					</a>
				</li>
			<?php endif; ?>

			<?php if ( is_search() ) : ?>
				<li class="breadcrumb-item">
					<a href="<?php echo esc_url( home_url( '/?s=' ) ) . esc_attr( get_search_query() ); ?>">
						<?php echo esc_html( 'Search result for "' ) . get_search_query() . '"'; ?>
					</a>
				</li>
			<?php endif; ?>

			<?php if ( is_archive() && ! is_home() ) : ?>
				<li class="breadcrumb-item active">
					<?php echo esc_html( ucwords( get_post_type() ) ); ?>
				</li>
			<?php endif; ?>

			<?php if ( is_home() ) : ?>
				<li class="breadcrumb-item active">
					<?php esc_html_e( 'Blog', 'enpix' ); ?>
				</li>
			<?php endif; ?>

			<?php if ( is_single() ) : ?>
				<li class="breadcrumb-item active" aria-current="page">
					<?php echo esc_html( $title ); ?>
				</li>
			<?php endif; ?>
		</ol>
		<?php
}


/**
 * Estimated reading time
 **/
function enpix_reading_time() {
	$content      = get_post_field( 'post_content', get_the_ID() );
	$word_count   = str_word_count( wp_strip_all_tags( $content ) );
	$reading_time = ceil( $word_count / 200 );

	if ( $reading_time == 1 ) {
		$timer = esc_html__( ' minute read time', 'enpix' );
	} else {
		$timer = esc_html__( ' minutes read time', 'enpix' );
	}

	$total_reading_time = $reading_time . $timer;
	echo esc_html( $total_reading_time );
}

/**
 * Allowed HTML for wp_kses function
 *
 * @return array
 */
function enpix_allowed_html() {
	return [
		'a'      => [
			'class'  => [],
			'href'   => true,
			'rel'    => true,
			'rev'    => true,
			'name'   => true,
			'target' => true,
		],
		'br'     => [],
		'p'      => [
			'class' => [],
		],
		'strong' => [],
		'div'    => [
			'style' => [],
			'class' => [],
		],
		'img'    => [
			'class'  => [],
			'src'    => [],
			'srcset' => [],
			'alt'    => [],
		],
	];
}
