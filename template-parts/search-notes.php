<h1>JE SUIS EN LIEN AVEC LES COURS</h1>

<?php

    if (have_posts()) :
            while (have_posts()) : the_post();
                the_title('<h1>', '</h1>');
                the_content(); ?>
                <hr>
            <?php endwhile;
        endif;
?>