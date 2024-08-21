<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package enpix
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$is_comments = have_comments() ? ' have_comments' : ' no_comments';
?>

<?php if ( have_comments() ) : ?>
	<div class="comment_inner <?php echo esc_attr( $is_comments ); ?>" id="comments">
		<h2 class="c_head"> <?php enpix_comment_count( get_the_ID() ); ?> </h2>
		<ul class="comment_box list-unstyled">
			<?php
			wp_list_comments(
				[
					'style'      => 'ul',
					'short_ping' => true,
					'walker'     => new Enpix_Walker_Comment(),
				]
			);
			the_comments_navigation();
			?>
		</ul>
	</div>
<?php endif; ?>


<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
	<div class="blog_comment_box <?php echo esc_attr( $is_comments ); ?>">
		<p class="no-comments alert alert-warning"><?php esc_html_e( 'Comments are closed.', 'enpix' ); ?></p>
	</div>
	<?php endif; ?>

	<?php
	$commenter   = wp_get_current_commenter();
	$req         = get_option( 'require_name_email' );
	$aria_req    = ( $req ? " aria-required='true'" : '' );
	$label       = '<label class="floating-label">';
	$input_class = '<div class="floating-input">';
	$fields      = [
		'author' => '<div class="input-full-name form-group">' . $input_class . $label . esc_html__( 'Full Name *', 'enpix' ) . '</label><input type="text" class="form-control" name="author" id="name" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . '></div></div>',
		'email'  => '<div class="input-email form-group">' . $input_class . $label . esc_html__( 'Email *', 'enpix' ) . '</label><input type="email" class="form-control" name="email" id="email" value="' . esc_attr( $commenter['comment_author_email'] )
					. '" ' . $aria_req . '></div></div>',
		'url'    => '<div class="input-url form-group">' . $input_class . $label . esc_html__( 'Website (Optional)', 'enpix' ) . '</label><input type="url" class="form-control" name="url" value="' . esc_attr( $commenter['comment_author_url'] ) . '"></div></div>',
	];

	$comments_args = [
		'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
		'class_form'           => 'get_quote_form comment-form',
		'class_submit'         => 'btn action_btn thm_btn',
		'title_reply_before'   => '<h2 class="c_head" id="reply-title">',
		'title_reply'          => esc_html__( 'Leave a Comment', 'enpix' ),
		'title_reply_after'    => '</h2>',
		'comment_notes_before' => '',
		'comment_field'        => '<div class="comment-box"><div class="floating-input"><textarea name="comment" id="comment" class="form-control message"></textarea></div></div>',
		'comment_notes_after'  => '',
		'class_container'      => 'comment-respond blog_comment_box' . esc_attr( $is_comments ),
	];

	comment_form( $comments_args );

	// TODO: Move comment box (textarea) to the bottom.
	?>
