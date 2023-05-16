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
        <?php
            // ":" + "endif" remplacent "{}"
            if (have_posts()) :
                while (have_posts()) : the_post(); 

                    $modeSombre = isset($_COOKIE['themeSombre']) ? $_COOKIE['themeSombre'] : '';
                
                    $article = 'notes';
                    if(in_category('galerie')) {

                        $titreGalerie = get_the_title();

                        if ($modeSombre === 'true' && $titreGalerie === 'galerie-sombre') {
                            $article = 'galerie-sombre';
                        } else if ($modeSombre === 'false' && $titreGalerie === 'galerie-claire') {
                            $article = 'galerie-claire';
                        }
                    };

                    get_template_part('template-parts/categorie', $article);

                endwhile;
                
            endif;
        ?>
    </section>
    
</main>

<?php get_footer(); ?>