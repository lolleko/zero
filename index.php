<?php
get_header();
get_sidebar();
?>
		<div id="content-wrap">
			<div id="content-cntnr">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="post-default">
						<div class="post-information">
							<div class="post-author-cntnr">
								<div class="post-avatar-cntnr">
									<?php echo get_avatar( get_the_author_meta('ID'), 64); ?>
								</div>
								<div class="post-ainfo-cntnr">
									<?php the_author_posts_link(); ?>
								</div>
							</div>
							<div class="post-tags-cntnr">
								<?php the_tags('<div class="tag">','</div><div class="tag">','</div>'); ?>
							</div>
							<div class="post-dinfo-cntnr">
								<?php the_date(); ?>
							</div>
						</div>
					 	<?php if ( in_category( '3' ) ) : ?>
					 	<div class="post-cat-three">
					 	<?php else : ?>
					 	<div class="post">
					 	<?php endif; ?>
						 	<h2 style="color: #D74E3E; background-color: white;"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						 	<div class="entry">
						 		<?php the_content(); ?>
						 	</div>
					 	</div>
					</div>
				<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</div>
		</div>	
<?php
get_footer();
?>
	</body>
</html>