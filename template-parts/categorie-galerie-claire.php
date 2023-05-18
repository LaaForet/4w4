<!-- template part pour afficher la galerie dans la page d'accueil -->

<article class="blocFlex__galerie">
    <?php 
   
    
            the_content();
        
    ?>
    <p><?php the_field('description'); ?></p>
</article>