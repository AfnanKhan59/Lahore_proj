<div <?php post_class( 'list-post-item' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'enpix_blog_list' ); ?>
			</a>
			<?php if ( ! empty( $cat_array ) ) : ?>
				<a class="category-badge" href="<?php echo esc_url( home_url( "/category/{$cat_array[0]->slug}" ) ); ?>">
					<?php echo esc_html( ucfirst( $cat_array[0]->name ) ); ?>
				</a>
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
			<?php the_excerpt(); ?>
		</div>
		<div class="post-readmore">
			<a href="<?php the_permalink(); ?>">Read more <i class="fa-solid fa-arrow-right-long"></i></a>
		</div>
	</div>
</div>
