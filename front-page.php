<?php
// Modèle par défaut 
?>
<?php get_header(); ?>

<main>
    <!-- <h3>front-page.php</h3> -->

    <section class="blocflex">
        <?php
            wp_nav_menu(array(
                "menu" => "evenement",
                "container" => "nav"
            ));
        ?>
    </section>

    <section class="blocflex">

        <div class="galerie galerie-sombre" style="display:none">
            <?php get_template_part('template-parts/categorie', 'galerie-sombre'); ?>
        </div>

        <div class="galerie galerie-claire" style="display:none">
            <?php get_template_part('template-parts/categorie', 'galerie-claire'); ?>
        </div>

        <?php
            // ":" + "endif" remplacent "{}"
            if (have_posts()) :
                while (have_posts()) : the_post(); 
                $titre = 'notes';
                    if(in_category('galerie')) {
                        $titre = 'galerie';
                    }
                    get_template_part('template-parts/categorie', $titre);
                endwhile;
            endif;
        ?>
    </section>

    
    
</main>

<?php get_footer(); ?>


