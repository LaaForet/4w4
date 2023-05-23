<?php
    /**
     * Template name: atelier
     */
    get_header();
?>

    <main class="site__main">
    <h1>LES ATELIERS DU TIM</h1>
    <?php
    if ( have_posts() ) : the_post(); ?>
    <h1><?= get_the_title(); ?></h1>
    <?php the_content();?>
    <section class="acf__atelier">
        <div>
            <p class="acf_titre">Formateur</p>
            <p class="acf_contenu"><?php the_field('formateur'); ?></p>
        </div>
        <div>
            <p class="acf_titre">Date</p>
            <p class="acf_contenu"><?php the_field('date'); ?></p>
        </div>
        <div>
            <p class="acf_titre">Heure</p>
            <p class="acf_contenu"><?php the_field('heure'); ?></p>
        </div>
        <div>
            <p class="acf_titre">Durée</p>
            <p class="acf_contenu"><?php the_field('duree'); ?> heures</p>
        </div>
        <div>
            <p class="acf_titre">Local</p>
            <p class="acf_contenu"><?php the_field('local'); ?></p>
        </div>
    </section>
    <?php endif;?>
    </main><!-- #main -->
    <?php
    get_footer();