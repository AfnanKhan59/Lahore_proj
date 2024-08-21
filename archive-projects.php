<?php
get_header();
$opt        = get_option( 'enpix_opt' );
$page_title = $opt['projects_title'] ?? '';

$project_cat_terms = get_terms( 'project-categories', [ 'hide_empty' => true ] );
?>

<main>
	<section class="pt-130 pb-130">
		<div class="container">
			<?php
			if ( ! empty( $page_title ) ) {
				echo '<h1 class="text-center">' . esc_html( $page_title ) . '</h1>';
			}
			?>

			<div class="portfolio-filter-buttons mt-65 mb-80">
				<?php if ( ! empty( $project_cat_terms ) ) : ?>
					<button class="selected" data-filter="*"><?php esc_html_e( 'All', 'enpix' ); ?></button>
					<?php foreach ( $project_cat_terms as $cat_term ) : ?>
						<button data-filter=".<?php echo esc_attr( $cat_term->slug ); ?>"><?php echo esc_html( $cat_term->name ); ?></button>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>

			<?php
			$projects = new WP_Query(
				[
					'post_type'      => 'projects',
					'posts_per_page' => -1,
				]
			)
			?>

			<div class="enpix-portfolio-grid">
				<?php
				while ( $projects->have_posts() ) :
					$projects->the_post();
					$project_cat_object_array = get_the_terms( get_the_ID(), 'project-categories' );
					$project_cat_array        = [];
					$project_cat_slugs        = [];
					if ( ! empty( $project_cat_object_array ) ) {
						foreach ( $project_cat_object_array as $element ) {
							array_push( $project_cat_array, $element->name );
							array_push( $project_cat_slugs, $element->slug );
						}
					}
					?>
					<div class="portfolio-item <?php echo esc_attr( implode( ' ', $project_cat_slugs ) ); ?>">
						<div class="portfolio-image relative">
							<?php the_post_thumbnail(); ?>
							<div class="portfolio-hover-overlay"></div>
							<a href="<?php echo esc_url( the_permalink() ); ?>" class="portfolio-hover-link"><?php esc_html_e( 'View', 'enpix' ); ?></a>
						</div>
						<div class="portfolio-text mt-30">
							<div class="portfolio-tags">
								<p class="enpix-body-text-2"><?php echo esc_html( implode( ', ', $project_cat_array ) ); ?></p>
							</div>
							<h2 class="heading-5 mt-15"><a href="<?php echo esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h2>
						</div>
					</div>
					<?php
				endwhile;
				wp_reset_postdata()
				?>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();

