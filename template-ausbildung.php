<?php
/*
* Template Name: Ausbildung
*/

get_header(); 

$dataPage = get_fields(get_the_ID());

?>

<main id="content" class="ausbildung-page services-page">

    <div class="services-block">
        <!-- <h2 class="decor-line"><a href="<?php the_permalink(); ?>"><?php echo prepareTitle($dataPage['title']); ?></a></h2> -->

        <div class="services-content" style="background-image:url(<?php echo get_the_post_thumbnail_url( $id, 'full' ); ?>)">
            <div class="services-content-inner">
                <?php echo the_content(); ?>
            </div>
        </div>


        <div class="container services-cat">

            <?php
               for($i = 1; $i <= 6; $i++){
                echo '<div class="col-services-cat">
                    <div class="col-serivces-cat-inner">
                        <div class="icon-cat">
                            <img src="'.$dataPage['image_services_icon_'.$i].'">
                            <span>'.$dataPage['title_services_'.$i].'</span>
                            <button></button>
                        </div>
                        <div class="wrapper_img">
                            <img src="'.$dataPage['image_services_'.$i].'" alt="">
                        </div>
                        <h3 class="title_open">'.$dataPage['title_services_'.$i].'</h3>
                        <div class="info-cat">
                            <div class="info-cat-inner">
                            '.$dataPage['services_'.$i].'
                            </div>
                        </div>
                    </div>
                </div> ';
               }
            ?>

        </div>


    </div>

</main>

<?php get_footer(); ?>