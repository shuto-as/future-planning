<?php get_header(); ?>
<div class="header-top-margin"></div>
<div class="news-content-area">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article>
            <section>
                <p class="news-content-date theme-color"><?php the_time('Y.m.d') ?></p>
                <h1 class="news-content-title"><?php the_title() ?></h1>
                <div class="news-content">
                    <?php the_content(); ?>
                </div>
            </section>
        </article>
    <?php endwhile; endif; ?>
    <div class="news-list-link theme-color">
        <a href="<?php echo home_url('/news'); ?>">ニュース一覧へ戻る</a>
    </div>
</div>
<?php get_footer(); ?>
