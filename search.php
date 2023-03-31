<?php
// Modèle par défaut 
?>
<?php get_header(); ?>

<main class="site__recherche">
<!-- <h3>search.php</h3> -->

<h3>Résultat de la recherche</h3>
    <?php
        $ma_categorie = "notes";
        if (in_category('coursa1')) {
            $ma_categorie = "coursa1";
        }
        else if (in_category('coursa2')) {
            $ma_categorie = "coursa2";
        }
        else if (in_category('coursa3')) {
            $ma_categorie = "coursa3";
        }
        get_template_part('template-parts/search-notes');
        
    
    ?>

</main>

<?php get_footer(); ?>
