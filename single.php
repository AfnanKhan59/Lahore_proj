<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Enpix
 */

get_header();
$opt         = get_option( 'enpix_opt' );
$author_id   = get_post_field( 'post_author', get_the_ID() );
$author_name = ucwords( get_the_author_meta( 'display_name', $author_id ) );
$author_name = ucwords( get_the_author_meta( 'display_name', $author_id ) );
$user_meta   = get_user_meta( $author_id, 'enpix_profile_options', true );
$user_bio    = get_the_author_meta( 'user_description', $author_id );

$author_designation = $user_meta['user_designation'] ?? '';

$cols = is_active_sidebar( 'sidebar_widgets' ) ? '8' : '12';
?>
<article>
	<!-- =========================== Post Header =========================================== -->
	<div class="enpix-post-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto">
					<div class="post-details">
						<div class="post-categories">
							<?php the_category(); ?>
						</div>
						<h1><?php the_title(); ?></h1>
						<div class="post-meta">
							<div class="post-author m-0">
								<div class="author-thumbnail">
									<?php echo get_avatar( $author_id, 34 ); ?>
								</div>
								<div class="author-name">
									<p>
										<a href="<?php echo esc_attr( get_author_posts_url( $author_id ) ); ?>">
											<?php echo esc_html( $author_name ); ?>
										</a>
									</p>
								</div>
							</div>
							<div class="d-flex post-readtime-date">
								<div class="post-read-time">
									<i class="fa-regular fa-clock"></i>
									<p><?php enpix_reading_time(); ?></p>
								</div>
								<div class="post-date">
									<i class="fa-regular fa-calendar"></i>
									<p>
										<a href="<?php echo esc_attr( get_day_link( get_the_time( 'Y' ), get_the_time( 'm' ), get_the_time( 'd' ) ) ); ?>">
											<?php the_time( get_option( 'date_format' ) ); ?>
										</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row pt-95 pb-80">
			<div class="col-lg-<?php echo esc_attr( $cols ); ?>">
				<!-- =========================== Post Body =========================================== -->
				<div class="enpix-post-body">
					<div class="post-container enpix-border-bottom">
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="post-thumbnail mb-60">
								<?php the_post_thumbnail(); ?>
							</div>
						<?php endif; ?>
						<?php the_content(); ?>
					</div>
				</div>

				<!-- =========================== Post Footer =========================================== -->
				<div class="enpix-post-footer">
					<div class="container">
						<div class="post-container">
							<div class="post-bottom-bar">
								<?php if ( has_tag() ) : ?>
								<div class="post-tags">
									<p><?php echo esc_html__( 'Tags', 'enpix' ) . ': '; ?></p>
									<div>
										<?php the_tags( ' ', '' ); ?>
									</div>
								</div>
								<?php endif; ?>
								<?php
								// Social Share Buttons.
								do_action( 'enpix_social_share' );
								?>
							</div>
							<div class="row">
								<div class="col-xl-11 col-lg-12">
									<div class="post-author-details">
										<div class="author-image">
											<?php echo get_avatar( $author_id, 230 ); ?>
										</div>
										<div class="author-details">
											<h2><a href="<?php echo esc_attr( get_author_posts_url( $author_id ) ); ?>"><?php echo esc_html( $author_name ); ?></a></h2>
											<h3><?php echo esc_html( strtoupper( $author_designation ) ); ?></h3>
											<?php echo wp_kses( $user_bio, enpix_allowed_html() ); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if ( comments_open() || get_comments_number() ) : ?>
					<div class="comment-section pt-80 pb-80 enpix-border-top">
						<?php comments_template(); ?>
					</div>
					<?php
				endif;
				?>
			</div>

			<!-- Sidebar -->
			<?php get_sidebar(); ?>
		</div>
	</div>

</article>

<?php
get_footer();
