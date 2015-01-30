			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			 	       <div class="entry-content">
				 			<?php the_content(); ?>
				 		</div>
				 		<div class="entry-footer-quote entry-footer-fade">
				 			<div class="entry-author-quote">
								<?php the_author_posts_link(); ?>
							</div>
							<div class="entry-date-quote">
								<?php echo get_the_date(); ?>
							</div>
				 		</div>
			</article>
