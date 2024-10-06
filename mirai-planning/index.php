<?php get_header(); ?>
<article>
<section>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php endwhile; endif; ?>
</section>
</article>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
