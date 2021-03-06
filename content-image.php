<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-header-thumb entry-footer-fade">
        <a class="entry-title" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
            <?php the_title(); ?>
        </a>
        <?php edit_post_link(''); ?>
    </div>
    <div class="entry-content">
        <?php
            echo first_image();
        ?>
    </div>
    <div class="entry-footer-image entry-footer-fade">
        <div class="entry-author-image">
            <?php the_author_posts_link(); ?>
        </div>
        <div class="entry-date-image">
            <a class="date-title" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php echo get_the_date(); ?></a>
        </div>
    </div>
</article>
