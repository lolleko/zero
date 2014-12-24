			<div class="post-default">
			 	<div class="post">
				 	<div class="content content-quote">
				 		<div class="post-quote-title-cntnr post-fade-cntnr">
				 			<h2 class="post-quote-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				 		</div>
				 		<?php the_content(); ?>
				 		<div class="post-quote-footer-cntnr post-fade-cntnr">
				 			<div class="quote-author-cntnr">
								<div class="quote-ainfo-cntnr">
									<?php the_author_posts_link(); ?>
								</div>
							</div>
							<div class="quote-dinfo-cntnr">
								<?php echo get_the_date(); ?>
							</div>
				 		</div>
				 	</div>
			 	</div>
			</div>