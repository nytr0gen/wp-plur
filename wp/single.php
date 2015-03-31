<?php get_header(); ?>

<div class=wrap><section class="lt-main lt-single">
<?php if (have_posts()) : ?>

    <div class=nameless>
        <div class=post_list>
        <?php while (have_posts()) : the_post(); ?>

            <article class=post>
                <header class=post_head>
                    <h1 class=post_title><?php the_title(); ?></h1>
                    <div class=post_data>by <?php the_author_posts_link(); ?>
                        on <time datetime="<?php the_time('c'); ?>" pubdate>
                        <?php the_time(get_option('date_format')); ?></time> |
                        <a href="">35 comments</a></div>
                </header>
                <div class=post_body>
                    <?php
                    if ( has_post_thumbnail() ) {
                        $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                        $html = '<div class=post_thumb style="background-image:url(%1$s)">' .
                                    '<img src="%1$s">' .
                                '</div>';
                        printf($html, $thumb[0]);
                    }
                    ?>

                    <?php the_content('Read More...'); ?>
                </div>
                <footer class=post_footer>
                    <?php comments_template(); ?>
                </footer>
            </article>

        <?php endwhile; ?>
        </div>

        <?php get_sidebar(); ?>
    </div>

    <div class=pageNav><ul>
        <li class="pageNav_item pageNav_item-prev">
            <?php previous_post_link('%link', '&#8604; %title'); ?>
        </li>
        <li class="pageNav_item pageNav_item-next">
            <?php next_post_link('%link', '%title &#8605;'); ?>
        </li>
    </ul></div>

<?php else : ?>

    <p><?php _e('No posts were found. Sorry!'); ?></p>

<?php endif; ?>
</section></div>

<?php get_footer(); ?>