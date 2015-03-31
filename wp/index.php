<?php get_header(); ?>

<div class=wrap><section class=lt-main>
<?php if (have_posts()) : ?>
    <div class=nameless>
        <div class=post_list>
        <?php while (have_posts()) : the_post(); ?>

            <?php
            $thumb = false;
            if ( has_post_thumbnail() ) {
                list($thumb) = wp_get_attachment_image_src(
                    get_post_thumbnail_id(),
                    large
                );
            }
            ?>

            <article class=post>
                <header class=post_head>
                    <a href="<?php the_permalink(); ?>" class=post_thumb
                        style="background-image:url(<?=$thumb?>)">
                        <img src="<?=$thumb?>">
                        <h1 class=post_title><?php the_title(); ?></h1>
                    </a>
                    <div class=post_data>by <?php the_author_posts_link(); ?>
                        on <time datetime="<?php the_time('c'); ?>" pubdate>
                        <?php the_time(get_option('date_format')); ?></time> |
                        <a href="">35 comments</a></div>
                </header>

                <div class=post_body>
                    <?php //the_content('Read More...'); ?>
                    <?php the_excerpt(); ?>
                </div>
            </article>

        <?php endwhile; ?>
        </div>

        <?php get_sidebar(); ?>
    </div>


    <div class=pageNav><ul>
        <li class="pageNav_item pageNav_item-prev">
            <?php previous_posts_link('&#8604; Older entries'); ?>
        </li>
        <li class="pageNav_item pageNav_item-next">
            <?php next_posts_link('Newer entries &#8605;'); ?>
        </li>
    </ul></div>

<?php else : ?>

    <p><?php _e('No posts were found. Sorry!'); ?></p>

<?php endif; ?>
</section></div>

<?php get_footer(); ?>