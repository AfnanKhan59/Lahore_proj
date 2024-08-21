<?php
$opt       = get_option( 'enpix_opt' );
$link_icon = $opt['format_link_icon'] ?? 'fas fa-link';
?>

<div <?php post_class( 'list-post-item' ); ?>>
	<div class="relative">
		<div class="post-format-link-icon">
			<i class="<?php echo esc_attr( $link_icon ); ?>"></i>
		</div>
		<div class="post-title m-0">
			<?php the_content(); ?>
		</div>
	</div>
</div>
