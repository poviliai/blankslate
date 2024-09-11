
<?php
/*
* Template Name: Datenschutz
*/

get_header(); 

$dataPage = get_fields(get_the_ID());
?>

<main id="content" class="datenschutz-page">

    <div class="container datenschutz-block">
        <div class="content">
            <?php echo the_content(); ?>
        </div>
    </div>

</main>

<?php get_footer(); ?>