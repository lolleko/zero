			<div class="post-default">
			 	<div class="post">
				 	<div class="content-quote">
				 		<div class="post-quote-title-cntnr post-fade-cntnr">
				 			<h2 class="post-quote-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				 		</div>
				 		<?php the_content(); ?>
				 		<div class="post-quote-footer-cntnr post-fade-cntnr">
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
				 	</div>
			 	</div>
			</div>