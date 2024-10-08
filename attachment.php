<?php get_header(); ?>
<div class="container" style="padding:70px 0;">
<?php global $post; ?>
<main id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
<h1 class="entry-title" style="margin-bottom: 20px"><?php the_title(); ?></h1> 

</header>
<div class="entry-content">
<div class="entry-attachment">
<?php if ( wp_attachment_is_image( $post->ID ) ) : $att_image = wp_get_attachment_image_src( $post->ID, 'full' ); ?>
<p class="attachment"><a href="<?php echo esc_url( wp_get_attachment_url( $post->ID ) ); ?>" title="<?php the_title_attribute(); ?>" rel="attachment"><img src="<?php echo esc_url( $att_image[0] ); ?>" width="<?php echo esc_attr( $att_image[1] ); ?>" height="<?php echo esc_attr( $att_image[2] ); ?>" class="attachment-full" alt="<?php $post->post_excerpt; ?>" /></a></p>
<?php else : ?>
<a href="<?php echo esc_url( wp_get_attachment_url( $post->ID ) ); ?>" title="<?php echo esc_attr( get_the_title( $post->ID ), 1 ); ?>" rel="attachment"><?php echo esc_url( basename( $post->guid ) ); ?></a>
<?php endif; ?>
</div>
<div class="entry-caption"><?php if ( ! empty( $post->post_excerpt ) ) { the_excerpt(); } ?></div>
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
</div>
</article>
<?php endwhile; endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
</div>