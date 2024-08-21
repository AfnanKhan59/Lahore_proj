<?php
get_header();

// Metabox data.
$meta         = get_post_meta( get_the_ID(), 'project-meta', true );
$client       = $meta['client_name'] ?? '';
$project_date = $meta['project_date'] ?? '';

$project_cat_object_array = get_the_terms( get_the_ID(), 'project-categories' );
$project_cat_array        = [];

if ( ! empty( $project_cat_object_array ) ) {
	foreach ( $project_cat_object_array as $element ) {
		array_push( $project_cat_array, $element->name );
	}
}

?>
	<main>
		<div class="container">
			<div class="row pt-80">
				<div class="col-md-3">
					<div class="project-meta-area">
						<h1 class="heading-3 pb-25"><?php the_title(); ?></h1>
						<?php if ( ! empty( $project_date ) ) : ?>
							<div class="project-meta">
								<h3><?php esc_html_e( 'Project Date', 'enpix' ); ?></h3>
								<p><?php echo esc_html( $project_date ); ?></p>
							</div>
						<?php endif; ?>
						<?php if ( ! empty( $client ) ) : ?>
							<div class="project-meta">
								<h3><?php esc_html_e( 'Client', 'enpix' ); ?></h3>
								<p><?php echo esc_html( $client ); ?></p>
							</div>
						<?php endif; ?>
						<?php if ( ! empty( $project_cat_array ) ) : ?>
							<div class="project-meta">
								<h3><?php esc_html_e( 'Category', 'enpix' ); ?></h3>
								<p><?php echo esc_html( implode( ', ', $project_cat_array ) ); ?></p>
							</div>
						<?php endif; ?>
						<div class="project-meta">
							<h3><?php esc_html_e( 'Share on', 'enpix' ); ?></h3>
							<div class="share-links">
								<a target="_blank" href="https://facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa-brands fa-facebook"></i></a>
								<a target="_blank" href="https://twitter.com/intent/tweet?text=<?php the_permalink(); ?>"><i class="fa-brands fa-twitter"></i></a>
								<a target="_blank" href="https://www.pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>"><i class="fa-brands fa-pinterest-p"></i></a>
								<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>"><i class="fa-brands fa-linkedin-in"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<div class="page-thumbnail">
						<?php
						the_post_thumbnail( 'enpix_1320x512' );
						?>
					</div>
				</div>
			</div>

			<div class="project-details mt-80">
				<?php the_content(); ?>
			</div>

			<?php
			$prev_post = get_previous_post();
			$next_post = get_next_post();
			?>

			<?php if ( $prev_post || $next_post ) : ?>
			<div class="project-navigation-button mt-130 mb-130">
				<?php if ( $prev_post ) : ?>
				<a href="<?php the_permalink( $prev_post ); ?>">
					<svg width="28" height="11" viewBox="0 0 28 11" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M5.33333 9.90918L1 5.40918L5.33333 0.90918M27 5.40918H1H27Z" stroke="#636466"
							stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
					<?php esc_html_e( 'Previous', 'enpix' ); ?>
				</a>
				<?php endif; ?>

				<?php if ( $next_post ) : ?>
				<a href="<?php the_permalink( $next_post ); ?>">
					<?php esc_html_e( 'Next', 'enpix' ); ?>
					<svg width="28" height="11" viewBox="0 0 28 11" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M22.6667 9.90918L27 5.40918L22.6667 0.90918M1 5.40918H27H1Z" stroke="#FF6701"
							stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</a>
				<?php endif; ?>
			</div>
			<?php endif; ?>
		</div>
	</main>

<?php
get_footer();
