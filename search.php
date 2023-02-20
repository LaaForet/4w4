<?php
// Modèle par défaut 
?>
<?php get_header(); ?>
<main>
<h3>search.php</h3>
<h3>Résultat de la recherche</h3>
    <?php
    // ":" + "endif" remplacent "{}"
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_title('<h1>', '</h1>');
            the_content(); ?>
            <?= wp_trim_words(get_the_excerpt(), 50, "[...]"); ?>
            <hr>
        <?php endwhile;
    endif;
    ?>
</main>
<?php get_footer(); ?>