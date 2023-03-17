<aside class="site__aside">

    <h3>Menu secondaire</h3>
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
        wp_nav_menu(array(
            "menu" => $ma_categorie,
            "container" => "nav"
        ));
    ?>
    
</aside>