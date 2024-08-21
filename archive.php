<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package enpix
 */

get_header();
$opt = get_option( 'enpix_opt' );

$archive_layout       = $opt['archive_layout'] ?? 'grid';
$is_archive_title     = $opt['is_archive_title'] ?? true;
$archive_author_title = $opt['archive_author_title'] ?? '';
$archive_date_title   = $opt['archive_date_title'] ?? '';
$archive_cat_title    = $opt['archive_cat_title'] ?? '';
$archive_tag_title    = $opt['archive_tag_title'] ?? '';
$is_archive_sidebar   = $opt['is_archive_sidebar'] ?? true;

$blog_column = is_active_sidebar( 'sidebar_widgets' ) && $is_archive_sidebar ? 'col-lg-8 sidebar-enabled' : '';
?>

	<main class="enpix-bg-1">
		<div class="container">
			<div class="page-header pt-120 pb-80 text-center">
				<?php if ( $is_archive_title ) : ?>
					<h1 class="mb-30">
						<?php
						if ( is_author() ) {
							echo esc_html( $archive_author_title ) . ' ' . esc_html( get_the_author() );
						} elseif ( is_date() ) {
							echo esc_html( $archive_date_title ) . ' ' . esc_html( get_the_date() );
						} elseif ( is_category() ) {
							echo esc_html( single_cat_title( $archive_cat_title . ' ' ) );
						} elseif ( is_tag() ) {
							echo esc_html( single_tag_title( $archive_tag_title . ' ' ) );
						}
						?>
					</h1>
				<?php endif; ?>
			</div>

			<div class="row pb-80">
				<div class="<?php echo esc_attr( $blog_column ); ?>">
					<?php if ( $archive_layout == 'list' ) : ?>
						<div class="blog-list pb-80">
							<?php
							// Posts list.
							while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/blog/list/content', get_post_format() );
							endwhile;
							?>

							<div class="enpix-pagination">
								<?php
								the_posts_pagination(
									[
										'prev_text' => '<i class="fa-solid fa-arrow-left-long"></i>',
										'next_text' => '<i class="fa-solid fa-arrow-right-long"></i>',
										'type'      => 'list',
									]
								);
								?>
							</div>
						</div>
					<?php elseif ( $archive_layout == 'grid' ) : ?>
						<div class="blog-grid">
							<?php
							// Posts grid
							while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/blog/grid/content', get_post_format() );
							endwhile;
							?>

							<div class="enpix-pagination">
								<?php
								the_posts_pagination(
									[
										'prev_text' => '<i class="fa-solid fa-arrow-left-long"></i>',
										'next_text' => '<i class="fa-solid fa-arrow-right-long"></i>',
										'type'      => 'list',
									]
								);
								?>
							</div>
						</div>
					<?php endif; ?>
				</div>
				<?php
				if ( $is_archive_sidebar ) {
					get_sidebar( 'sidebar_widgets' );
				}
				?>
			</div>
		</div>
	</main>

<?php
get_footer();
