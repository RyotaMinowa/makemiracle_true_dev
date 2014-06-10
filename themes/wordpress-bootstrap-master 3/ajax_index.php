
<!-- http://koukitips.net/ajax-more-read/を参照　-->

<section id="content">
  
    <?php query_posts('posts_per_page=6'); ?>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article>
                //タイトルの取得
                <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                //投稿時間の取得
                <p><?php echo get_post_time("M d, Y"); ?></p>
                //抜粋記事の取得
                <p><?php echo mb_substr(strip_tags(get_the_content()), 0, 108); ?></p>
                <p><a href="<?php the_permalink(); ?>">Read More</a></p>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        Not Found.
    <?php endif; ?>
    <?php wp_reset_query(); ?>
    <p id="more"><a href="#">もっと表示する</a></p>
      
</section>