<!-- template part pour afficher la galerie dans la page d'accueil -->

<article class="blocFlex__galerie">
    
    <?php 

        $titreGalerie = 'galerie-sombre'; 
        if (get_the_title() === $titreGalerie) {
            the_content();
        }
    
    ?>
    <p><?php the_field('description'); ?></p>

</article>