<?php
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<div class="comment-list post post-comment">
		    <div class="comments-title entry-title">
			<?php
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'twentyfifteen' ),
					number_format_i18n( get_comments_number() ), get_the_title() );
			?>
		</div>
			<?php
				wp_list_comments( array(
					'style'       => 'div',
					'short_ping'  => true,
					'avatar_size' => 96,
                    'max_depth'   => 3
				) );
			?>
		</div>

	<?php endif;?>

	<?php
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'twentyfifteen' ); ?></p>
	<?php endif; ?>

    <div id="comment-form-respond-container" class="post">
	    <?php comment_form(); ?>
	</div>

</div>
