			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php the_title( sprintf( '<div class="entry-title entry-title-link"><a href="%s">', esc_url( get_url_in_content(get_the_content()))), '</a></div>' ); ?>
                <?php edit_post_link(''); ?>
			</article>
