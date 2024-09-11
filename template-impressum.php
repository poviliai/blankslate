
<?php
/*
* Template Name: Impressum
*/

get_header(); 

$dataPage = get_fields(get_the_ID());
?>

<main id="content" class="impressum-page">


    <div class="container impressum-block">
        <h1 class="decor-line dl-black""><?php the_title(); ?></h1> <?php edit_post_link(); ?>

        <div class="impressum-block-inner">
            <div class="col_half">
                <?php echo $dataPage['col_1']; ?>
            </div>
            <div class="col_half">
                <?php echo $dataPage['col_2']; ?>
            </div>
<!--            <div class="col-3">-->
<!--                --><?php //echo $dataPage['col_3']; ?>
<!--            </div>-->
        </div>
       
<!--        <div class="impressum-block-extra">-->
<!--            --><?php //echo $dataPage['extra_info']; ?>
<!--        </div>-->

    </div>

</main>

<?php get_footer(); ?>