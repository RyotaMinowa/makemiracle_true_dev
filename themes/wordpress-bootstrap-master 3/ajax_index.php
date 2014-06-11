
<!-- http://koukitips.net/ajax-more-read/を参照　-->

<section id="content" class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
<!--
    <?php query_posts('posts_per_page=3'); ?>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                <p><?php echo get_post_time("M d, Y"); ?></p>
                <p><?php echo mb_substr(strip_tags(get_the_content()), 0, 108); ?></p>
                <p><a href="<?php the_permalink(); ?>">Read More</a></p>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        Not Found.
    <?php endif; ?>
    <?php wp_reset_query(); ?>
    <p id="more"><a href="#">もっと表示する</a></p>
-->
</section>