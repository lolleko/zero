<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-header entry-header-video">
        <a class="entry-title" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
    </div>
    <div class="entry-content">
        <?php the_content(); ?>
        <?php edit_post_link(''); ?>
        <div class="pagelink"><?php wp_link_pages('pagelink=<span class="pagenumber">%</span>'); ?></div>
    </div>
    <div class="entry-footer">
        <div class="entry-author">
            <?php the_author_posts_link(); ?>
        </div>
        <div class="entry-tags">
            <?php the_tags('<div class="tag">','</div><div class="tag">','</div>'); ?>
        </div>
        <div class="entry-date">
            <a class="date-title" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php echo get_the_date(); ?></a>
        </div>
    </div>
</article>
