			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="entry-header">
                        <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="entry-header-author-avatar">
                            <?php echo get_avatar( get_the_author_meta( 'email' ), '64' ); ?>
                        </a>
                        <div class="entry-title" style="display:inline-block;"><?php the_author_posts_link(); ?></div>
                        <div class="entry-date-aside">
                            <?php echo get_the_date(); ?>
                        </div>
                    </div>
                        <div class="entry-content">
				            <?php the_content(); ?>
                            <?php edit_post_link(''); ?>
                        </div>
			</article>
