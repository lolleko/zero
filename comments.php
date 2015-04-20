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
        if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
        ?>
		    <div class="no-comments"><?php _e( 'Comments are closed.', 'twentyfifteen' ); ?></div>
	   <?php endif; ?>

			<?php
				wp_list_comments( array(
					'style'       => 'div',
					'short_ping'  => true,
					'avatar_size' => 96,
                    'max_depth'   => 10,
				) );
			?>
		</div>

	<?php endif;?>

    <div id="navigation" class="navigation post">
        <?php next_comments_link($label='<div id="navigation-right" class="navigation-link">Newer Comments</div>') ?>
        <?php previous_comments_link($label='<div id="navigation-left" class="navigation-link">Older Comments</div>') ?>
    </div>

    <div id="comment-form-respond-container" class="post">
	    <?php comment_form(); ?>
	</div>

</div>
