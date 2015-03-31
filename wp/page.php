<?php get_header(); ?>

<div class=wrap><section class="lt-main lt-single">
<?php if (have_posts()) : ?>

    <div class=nameless>
        <div class=post_list>
        <?php while (have_posts()) : the_post(); ?>

            <article class=post>
                <header class=post_head>
                    <h1 class=post_title><?php the_title(); ?></h1>
                </header>
                <div class=post_body>
                    <?php the_content('Read More...'); ?>
                </div>
            </article>

        <?php endwhile; ?>
        </div>

        <?php get_sidebar(); ?>
    </div>

<?php else : ?>

    <p><?php _e('No posts were found. Sorry!'); ?></p>

<?php endif; ?>
</section></div>

<?php get_footer(); ?>