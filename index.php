<?php
get_header();
?>
	<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();
			
			get_template_part( 'content', get_post_format() );

		endwhile; else : 
	?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		<div class="clear"></div>
<?php
get_footer();
