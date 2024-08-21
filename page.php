<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package enpix
 */

get_header();

$opt      = get_option( 'enpix_opt' );
$opt_page = get_post_meta( get_the_ID(), 'page_options', true );

$hide_page_title = $opt_page['hide_page_title'] ?? false;
$page_subtitle   = $opt_page['page_subtitle'] ?? '';
?>

<main>
	<div class="container">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<!-- ======================= Page Header ================== -->
			<?php
			if ( ! is_front_page() ) :
				if ( ! $hide_page_title ) :
					?>
					<div class="page-header pt-120 pb-80 text-center">
						<h1 class="mb-30"><?php the_title(); ?></h1>
						<?php
						if ( ! empty( $page_subtitle ) ) {
							echo '<p class="enpix-subtitle-2">' . wp_kses( $page_subtitle, [ 'br' => [] ] ) . '</p>';
						}
						?>
					</div>
					<?php
				endif;
			endif;
			?>

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="page-thumbnail pb-80">
					<?php the_post_thumbnail( 'large' ); ?>
				</div>
			<?php endif; ?>

			<div class="enpix-page-content pb-80">
				<?php
				the_content();
				?>
			</div>

			<?php if ( comments_open() || get_comments_number() ) : ?>
				<div class="comment-section pt-80 pb-80 enpix-border-top">
					<?php comments_template(); ?>
				</div>
			<?php endif; ?>

			<div class="enpix-page-navigation">
				<?php
				wp_link_pages();
				?>
			</div>

		<?php endwhile; ?>
	</div>
</main>

<?php
get_footer();
