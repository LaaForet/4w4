<?php

    /**
     * Ajoute les styles de l'ensemble du site web
     */
    function ajouter_styles(){
        wp_enqueue_style (  'style-principal',  // identificateur du link css
                            get_template_directory_uri() . '/style.css', // endroit où se trouve le fichier style.css
                            array(), // fichiers css qui dépendent de style.css
                            filemtime(get_template_directory() . '/style.css') // version de notre style.css
        );
    }
    add_action( 'wp_enqueue_scripts', 'ajouter_styles');
    
// ******************   Enregistrement des menus *********************************

    /**
     * Enregistre l'emplacement des menus
     */
    function enregistrement_nav_menu(){
        register_nav_menus( array(
            'principal' => 'Menu principal',
            'footer'  => 'Menu pied de page'
        ) );
    }
    add_action( 'after_setup_theme', 'enregistrement_nav_menu', 0 );

    // ******************   Modification des choix des menus "cours..." *********************************

    /**
     * Personalise les titres des menus (surtout dans l'optique de réduire les titres)
     * @param title Cette variable reçoit le contenu du titre
     * @param args Cette variable reçoit le menu en cours
     */
    function perso_menu_item_title($title, $args) {
        // Remplacer 'cours' par l'identifiant de votre menu
        if($args->menu == 'coursa1' || 'coursa2' || 'coursa3') {
            // Modifier la longueur du titre en fonction de vos besoins
            if(substr($title, 0, 3) === '582' || substr($title, 4, 3) === '5N1' || substr($title, 4, 3) === '5E1'){
                $title = substr($title, 4);
                $title = wp_trim_words($title, 3, ' ... '); // On garde 3 mots pours le titre du choix
                return $title;
            } 
        }
        return $title;
    }
    add_filter('nav_menu_item_title', 'perso_menu_item_title', 10, 3);

    /**
     * Pour ajouter la description des événements dans le menu événement
     */
    function ajouter_description_class_menu( $items, $args ) {
        // Vérifier si le menu correspondant est celui que vous souhaitez modifier
        if ( 'evenement' === $args->menu ) {
            foreach ( $items as $item ) {
                // Récupérer le titre, la description et la classe personnalisée
                $titre = $item->title;
                $description = $item->description;
                //$classe = $item->class; // Remplacer par le nom de la classe souhaitée
    
                // Ajouter la description et la classe personnalisée à l'élément de menu
                $item->title .= '<span>' . $description . '</span>';
            }
        }
        return $items;
    }
    add_filter( 'wp_nav_menu_objects', 'ajouter_description_class_menu', 10, 2 );

    // add_theme_support()
    add_theme_support(  'title-tag');
    add_theme_support(  'custom-logo', array(
                        'height' => 480,
                        'width' => 720
    ));
    add_theme_support('post-thumbnails');

    /**
     * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
     * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
     * Dépendant de la condition initiale on peut filtrer un type particulier de requête
     * Dans ce cas çi nous filtrons la requête de la page d'accueil
     * @param WP_query  $query la requête principal de WP
     */
    function cidweb_modifie_requete_principal( $query ) {
        if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
        $query->set( 'category_name', 'notes' );
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'ASC' );
        }
        }
        add_action( 'pre_get_posts', 'cidweb_modifie_requete_principal' );

    // Enregistrer le sidebar
    function enregistrer_sidebar() {
        register_sidebar( array(
            'name' => __( 'footer_articles', 'clara-2023' ),
            'id' => 'footer_articles',
            'description' => __( 'Une zone  afficher des widgets dans le footer.', 'clara-2023' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ) );
    
        register_sidebar( array(
            'name' => __( 'footer_liens_sociaux', 'clara-2023' ),
            'id' => 'footer_liens_sociaux',
            'description' => __( 'Une zone  afficher des widgets dans le footer.', 'clara-2023' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ) );

        register_sidebar( array(
            'name' => __( 'footer_commentaires', 'clara-2023' ),
            'id' => 'footer_commentaires',
            'description' => __( 'Une zone  afficher des widgets dans le footer.', 'clara-2023' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ) );
    
    }
    add_action( 'widgets_init', 'enregistrer_sidebar' );

?>
