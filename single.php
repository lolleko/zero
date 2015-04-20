<?php
get_header();
?>
	<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();

			get_template_part( 'content', get_post_format() );

        if ( comments_open() || get_comments_number() ) :
				comments_template();
        endif;

		endwhile; else :
	?>
		<p><?php 'Sorry, no posts matched your criteria.' ?></p>
		<?php endif; ?>
<?php
get_footer();
