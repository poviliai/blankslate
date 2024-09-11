<?php
/*
* Template Name: Blog
*/

get_header(); 

$myposts = get_posts( array(
    'numberposts' => -1,
    'category'    => 3,
    'post_type'   => 'post',
    'orderby'     => 'date',
    'suppress_filters' => true,
) );

?>

<main id="content" class="blog-page">

    <div class="blog-block">
        <div class="container">
            <section class="newest-posts">
                <h2 class="decor-line">Neueste <span class="colre7">Beiträge</span></h2>
                <!-- get all posts -->
                <div class="newest-posts-inner">
                    <?php
                    
                        $excludePosts = array();
                        $counter = 1;
                        foreach ( $myposts as $post ) : setup_postdata( $post ); 
                            if($counter <= 2){ ?>

                                <div class="posts posts-<?php echo get_the_ID(); ?>">
                                    <div class="wrapper_img">
                                        <a href="<?php the_permalink(); ?>" style="background-image:url(<?php echo get_the_post_thumbnail_url( $id, 'full' ); ?>);"></a>
                                    </div>
                                    <h3><a href="<?php the_permalink(); ?>"><?php echo prepareTitle(get_the_title()); ?></a></h3>
                                    <span class="date">
                                        <?php echo get_the_date(); ?>
                                    </span>
                                </div>

                            <?php
                                $excludePosts[] = get_the_ID();
                            }
                            $counter ++;
                        endforeach; 
                        wp_reset_postdata();
                    ?>
                </div>
            </section>

            <section class="all-posts">
                <h2 class="decor-line">Weitere <span class="colre7">Beiträge</span></h2>
                <div class="all-posts-inner">
                    <?php
                        foreach ( $myposts as $post ) : setup_postdata( $post ); 
                            if(!in_array(get_the_ID(), $excludePosts)){
                                ?>

                                <div class="posts posts-<?php echo get_the_ID(); ?>">
                                    <div class="posts-inner">
                                        <a class="front-image-bg" href="<?php the_permalink(); ?>" style="background-image:url(<?php echo get_the_post_thumbnail_url( $id, 'full' ); ?>)"></a>
                                        <h3><a href="<?php the_permalink(); ?>"><?php echo prepareTitle(get_the_title()); ?></a></h3>
                                        <div class="posts-content">
                                            <span class="date">
                                                <?php echo get_the_date(); ?>
                                            </span>
                                            <div class="desc-posts">
                                                <?php the_content(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php
                            }
                        endforeach; 
                        wp_reset_postdata();
                    ?>
                </div>
            </section>
        </div>
    </div>

</main>

<?php get_footer(); ?>