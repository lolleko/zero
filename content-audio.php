<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-header entry-header-audio">
        <a class="entry-title" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
            <?php the_title(); ?>
        </a>
    </div>
    <div class="entry-content">
        <?php the_content(); ?>
        <?php edit_post_link(''); ?>
    </div>
    <div class="entry-footer entry-footer-white">
        <div class="entry-author-white">
            <?php the_author_posts_link(); ?>
        </div>
        <div class="entry-date-white">
            <a class="date-title" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php echo get_the_date(); ?></a>
        </div>
    </div>
</article>
