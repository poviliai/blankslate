<?php
/*
* Template Name: Dienstleistungen
*/

get_header(); 

$dataPage = get_fields(get_the_ID());

?>

<main id="content" class="dienst-page services-page">

    <?php 
    $titl = $dataPage['title'];
    $search = array('@colr@', '@/colr@');
    $replace = array('<span class="colre7">', '</span>');
    $titleConverted = str_replace($search, $replace, $titl);
?>

    <div class="container services-block">
        <h2 class="decor-line"><a href="<?php the_permalink(); ?>"><?php echo $titleConverted; ?></a></h2>

        <div class="services-content">
            <div class="services-content-inner">
                <?php echo the_content(); ?>
            </div>
            <div class="wrapper-col-dienstleistungen">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url( $id, 'full' ); ?>" alt="">
                </a>
                <a href="<?php echo $dataPage['button_link_second_section']; ?>" target="_blank"
                        class="partner_bi_2_link"><img src="/wp-content/uploads/2020/10/smalliconlogo.png"> Zertifizierung & Beratung</a>
            </div>
        </div>


        <div class="services-cat">

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