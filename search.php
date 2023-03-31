<?php
// Modèle par défaut 
?>
<?php get_header(); ?>

<main class="site__recherche">
<!-- <h3>search.php</h3> -->

<h3>Résultat de la recherche</h3>
  
    <?php
        get_template_part('template-parts/search-notes');

        $queried_obj = get_queried_object();
        if ($queried_obj && has_term(array('coursa1', 'coursa2', 'coursa3'), 'category', $queried_obj)) {

            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_title('<h1>', '</h1>');
                    the_content(); ?>
                    <hr>
                    
                <?php endwhile;
            endif;

            get_template_part('template-parts/search-cours');
        }
        else if ($queried_obj && has_term('notes', 'category', $queried_obj)) {

            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_title('<h1>', '</h1>');
                    the_content(); ?>
                    <hr>
                    
                <?php endwhile;
            endif;
            
            get_template_part('template-parts/search-notes');
        }
    ?>

</main>

<?php get_footer(); ?>
