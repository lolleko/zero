			<article class="post format-default">
                <?php if ( !has_post_thumbnail() ):?>
                    <div class="entry-header">
                        <a class="entry-title" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                    </div>
                <?php else: ?>
                    <div class="entry-thumb">
                        <div class="entry-header-thumb">
                            <a class="entry-title" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                        </div>
                        <?php the_post_thumbnail();?>
                    </div>
                <?php endif; ?>
                <div class="entry-content">
                    <?php the_content(); ?>
                    <?php edit_post_link( 'edit', '<span class="edit-link">', '</span>' ); ?>
                </div>
                <div class="entry-footer">
                    <div class="entry-author">
                        <?php the_author_posts_link(); ?>
                    </div>
                    <div class="entry-tags">
                        <?php the_tags('<div class="tag">','</div><div class="tag">','</div>'); ?>
                    </div>
                    <div class="entry-date">
                        <?php echo get_the_date(); ?>
                    </div>
                </div>
			</article>
