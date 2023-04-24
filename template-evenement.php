<?php
    /**
     * Template name: Evenement
     */
    get_header();
?>

    <main class="site__main">
    <?php
    if ( have_posts() ) : the_post(); ?>
    <h1><?= get_the_title(); ?></h1>
    <?php the_content();?>
    <p>
        L'adresse de l'evénement <br/>
        <iframe src="<?php the_field('adresse'); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </p>
    <p>La date et l'heure de l'événement <?php the_field('date_et_heure_de_levenement'); ?></p>     
    <?php endif;?>
    </main><!-- #main -->
    <?php
    get_footer();
