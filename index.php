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
		<div id="navigation" class="navigation post">
		    <?php posts_nav_link(' ','<div id="navigation-right" class="navigation-link">Newer Posts</div>','<div id="navigation-left" class="navigation-link">Older Posts</div>'); ?>
        </div>
		<div class="clear"></div>
<?php
get_footer();
