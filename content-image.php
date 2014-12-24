			<div class="post-default">
			 	<div class="post">
				 	<div class="content content-image">
				 		<div class="post-image-title-cntnr post-fade-cntnr">
				 			<h2 class="post-image-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				 		</div>
				 		<div class="content-entry">
				 			<?php the_content(); ?>
				 		</div>
				 		<div class="post-image-footer-cntnr post-fade-cntnr">
				 			<div class="image-author-cntnr">
								<div class="image-ainfo-cntnr">
									<?php the_author_posts_link(); ?>
								</div>
							</div>
							<div class="image-dinfo-cntnr">
								<?php echo get_the_date(); ?>
							</div>
				 		</div>
				 	</div>
			 	</div>
			</div>