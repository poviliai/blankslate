<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header>
<?php if ( is_singular() ) {
echo '<h1 class="decor-line entry-title">';
} else {
echo '<h2 class="decor-line entry-title">';
} 

?>
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php echo prepareTitle(get_the_title(), false); ?></a>
<?php if ( is_singular() ) {
echo '</h1>';
} else {
echo '</h2>';
} ?>
<!-- <?php if ( ! is_search() ) { get_template_part( 'entry', 'meta' ); } ?> -->

<div class="under-header-single-post">
    <div class="col_half">
        <span class="date">
            <?php the_time( 'd.m.Y' ); ?>
        </span>
        <div class="category-name">
            <?php 
                $category = get_the_category(); 
                echo $category[0]->name;
            ?>
        </div>
    </div>

    <div class="col_half">
        <div class="share">
            <span>JETZT TEILEN</span>
            <?php //echo do_shortcode ('[shareaholic app="share_buttons" id="28990777"]'); ?>
        </div>
    </div>
</div>

</header>
<?php get_template_part( 'entry', ( is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
<?php if ( is_singular() ) { get_template_part( 'entry-footer' ); } ?>
</article>