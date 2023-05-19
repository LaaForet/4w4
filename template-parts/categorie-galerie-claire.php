<!-- template part pour afficher la galerie dans la page d'accueil -->

<article class="blocFlex__galerie">
    
    <?php
        $args = array(
            'name'        => 'galerie-claire',
            'post_type'   => 'post',
            'post_status' => 'publish',
            'numberposts' => 1
        );
        $my_posts = get_posts($args);
        if( $my_posts ) {
            echo apply_filters('the_content', $my_posts[0]->post_content); // affiche le contenu du post
        }
    ?>

    <p><?php the_field('description'); ?></p>

</article>