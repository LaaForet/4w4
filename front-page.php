<?php
// Modèle par défaut 
?>
<?php get_header(); ?>
<main>
    <h3>front-page.php</h3>
    <?php
    // ":" + "endif" remplacent "{}"
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <h1>
                <a href='<?php echo get_permalink(); ?>'><?= get_the_title(); ?></a>
            </h1>
            <hr>
        <?php endwhile;
    endif;
    ?>
</main>
<?php get_footer(); ?>