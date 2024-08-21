<?php
$meta       = get_post_meta( get_the_ID(), 'video_post_meta', true );
$video_url  = $meta['post_video'] ?? '';
$video_icon = $opt['format_video_icon'] ?? 'fas fa-play-circle';
?>

<div <?php post_class( 'list-post-item' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumbnail">
			<?php
			the_post_thumbnail( 'enpix_blog_list' );
			if ( $video_url ) :
				?>
				<div class="post-format-video">
					<a href="<?php echo esc_url( $video_url ); ?>" class="popup-video">
						<i class="<?php echo esc_attr( $video_icon ); ?>"></i>
					</a>
				</div>
			<?php endif; ?>
		</div>
	<?php endif; ?>
	<div class="post-content">
		<div class="post-meta">
			<div class="post-author">
				<div class="author-thumbnail">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 25 ); ?>
				</div>
				<div class="author-name">
					<p>
						<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
							<?php echo esc_html( get_the_author() ); ?>
						</a>
					</p>
				</div>
			</div>
			<div class="post-date">
				<i class="fa-regular fa-calendar"></i>
				<p>
					<a href="<?php echo esc_url( get_day_link( get_the_time( 'Y' ), get_the_time( 'm' ), get_the_time( 'd' ) ) ); ?>">
						<?php the_time( get_option( 'date_format' ) ); ?>
					</a>
				</p>
			</div>
		</div>
		<div class="post-title">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		</div>
		<div class="post-excerpt">
			<?php
			if ( has_post_thumbnail() ) {
				enpix_helper()->limit_letter( get_the_content(), 400 );
			} else {
				enpix_helper()->limit_letter( get_the_content(), 700 );
			}
			?>
		</div>
		<div class="post-readmore">
			<a href="<?php the_permalink(); ?>">Read more <i class="fa-solid fa-arrow-right-long"></i></a>
		</div>
	</div>
</div>
