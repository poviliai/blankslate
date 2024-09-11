<?php
/*
* Template Name: Kontakt
*/

get_header(); 

$dataPage = get_fields(get_the_ID());
?>

<main id="content" class="kontakt-page">

    <div class="container">
        <h1 class="decor-line dl-black""><?php the_title(); ?></h1> <?php edit_post_link(); ?>
    </div>

    <div  class="container kontakt-block">

        <div class="kontakt-content">
            <?php
                the_content();
            ?>
        </div>

        <div class="kontakt-block-inner">
            <?php echo do_shortcode('[contact-form-7 id="147" title="Contact form"]'); ?>
        </div>
        
    </div>

   
</main>

<?php get_footer(); ?>