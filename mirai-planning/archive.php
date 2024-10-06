<?php get_header(); ?>
<div class="header-top-margin"></div>
<div class="news-list-area">
    <h1 class="news-title-area">
        <p class="font-corinthia">News</p>
        <p class="news-subtitle font-noto-serif-jp">ニュース</p>
    </h1>
    <div class="news-list">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article>
                <section>
                    <a href="<?php the_permalink(); ?>">
                        <span class="news-post-area font-noto-sans-jp">
                            <span class="news-post-date theme-color"><?php the_time('Y.m.d') ?></span><br>
                            <span class="news-post-title"><?php the_title() ?></span>
                        </span>
                    </a>
                </section>
            </article>
        <?php endwhile; endif; ?>
    </div>
    <?php
        $args = [
            'mid_size' => 2,
            'prev_text' => '&lt;&lt;前へ',
            'next_text' => '次へ&gt;&gt;',
            'screen_reader_text' => ' ',
        ];
        the_posts_pagination($args);
    ?>
</div>
<?php get_footer(); ?>
