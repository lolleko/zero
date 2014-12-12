<?php
get_header();
?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="post-default">
			 	<div class="post">
			 	<?php if ( !empty(get_the_title()) && !has_post_format( array('quote', 'image', 'status') ) ) : ?>
				 	<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<?php endif; ?>
				 	<div class="entry">
				 		<?php the_content(); ?>
				 	</div>
			 	</div>
			 	<?php if ( !has_post_format( array('quote', 'image', 'status') ) ) : ?>
			 	<div class="post-footer">
			 		<div class="post-author-cntnr">
						<div class="post-ainfo-cntnr">
							<?php the_author_posts_link(); ?>
						</div>
					</div>
					<div class="post-tags-cntnr">
						<?php the_tags('<div class="tag">','</div><div class="tag">','</div>'); ?>
					</div>
					<div class="post-dinfo-cntnr">
						<?php echo get_the_date(); ?>
					</div>
				</div>
				<?php endif; ?>
			</div>
		<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
<?php
get_footer();