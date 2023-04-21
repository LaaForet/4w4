<footer class="site__footer">
    <!-- <h3>Ceci est le pied de page</h3> -->

    <section class="site__footer__logo"><?php the_custom_logo() ?></section>

    <section class="site__footer__nav">
        <h2>Liens rapides</h2>
        <div class="sidebar">
            <?php dynamic_sidebar( 'footer_articles' ); ?>
        </div>
        <!-- <?php 
            // wp_nav_menu(array(
            //     'menu' => 'entete', 
            //     'container' => 'nav'
            //     ))
        ?> -->
    </section>
    
    <section class="site__footer__medias">
        <h2>Suivez-nous !</h2>
        <div class="sidebar">
            <?php dynamic_sidebar( 'footer_liens_sociaux' ); ?>
        </div>
        <div class="sidebar">
            <?php dynamic_sidebar( 'footer_commentaires' ); ?>
        </div>
        <!-- <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-github"></i>
        <i class="fa-brands fa-linkedin"></i> -->
    </section>

</footer>

<?php wp_footer(); ?>