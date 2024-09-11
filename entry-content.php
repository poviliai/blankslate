<div class="entry-content">
<div class="entry-single-content-inner">
   
    <div class="blog-single-content">
        <div class="image-col">
            <?php if ( has_post_thumbnail() ) : ?>
                <a class="blog-single-photo" style="background-image: url(<?php echo get_the_post_thumbnail_url( $id, 'full' ); ?>)" href="<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false ); echo esc_url( $src[0] ); ?>" title="<?php the_title_attribute(); ?>"></a>
            <?php endif; ?>
        </div>
        <div class="blog-single-content-inner">

            <?php echo the_content(); ?>
           
        </div>
    </div>
</div>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</div>