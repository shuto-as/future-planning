<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article>
<section>
    <h1><?php the_title() ?></h1>
    <?php the_content() ?>
</section>
</article>
<?php endwhile; endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
