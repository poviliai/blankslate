<?php get_header(); ?>
<main id="content" class="single-blog-post">
    <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry' ); ?>
        <?php endwhile; endif; ?>
        <footer class="footer">
        <?php //get_template_part( 'nav', 'below-single' ); ?>
        <?php get_sidebar(); ?>
        </footer>
    </div>
</main>
<?php get_footer(); ?>