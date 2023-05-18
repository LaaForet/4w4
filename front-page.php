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
                    $article = 'notes';
                    if(in_category('galerie')) {
                        $titreGalerie = get_the_title();
        ?>
                    <!-- <div class="galerie galerie-sombre" style="display:none">
                        <?php get_template_part('template-parts/categorie', 'galerie-sombre'); ?>
                    </div>
                    <div class="galerie galerie-claire" style="display:none">
                        <?php get_template_part('template-parts/categorie', 'galerie-claire'); ?>
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                        let modeSombre = JSON.parse(localStorage.getItem('themeSombre'));
                        if (modeSombre) {
                            if ('<?php echo $titreGalerie; ?>' === 'galerie-sombre') {
                                document.querySelector('.galerie-sombre').style.display = "block";
                            }
                        } else {
                            if ('<?php echo $titreGalerie; ?>' === 'galerie-claire') {
                                document.querySelector('.galerie-claire').style.display = "block";
                            }
                        }
                        });
                    </script> -->
        <?php
                       
                    }else{
                        get_template_part('template-parts/categorie', $article);
                    }


                endwhile;
                
                
            endif;
        ?>
    </section>
    
</main>

<?php get_footer(); ?>


