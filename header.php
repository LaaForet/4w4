<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <?php wp_head(); ?>

    <!-- Pour gérer les changement de couleur (mode sombre/clair) -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var modeSombre = false;
            modeSombre = JSON.parse(localStorage.getItem('themeSombre'));
            var bouton = document.getElementById('btn-toggle-theme');
            changerTheme()

            bouton.addEventListener('click', function(event) {
                modeSombre = !modeSombre;
                changerTheme();
                changerGalerie();
                localStorage.setItem('themeSombre', JSON.stringify(modeSombre));   
            });

            function changerTheme() {
                if (modeSombre) {
                    document.body.classList.add('sombre');
                    document.body.classList.remove('clair');
                    bouton.innerHTML = '<i class="fa-solid fa-sun"></i>';
                } else {
                    document.body.classList.remove('sombre');
                    document.body.classList.add('clair');
                    bouton.innerHTML = '<i class="fa-solid fa-moon"></i>';
                }  
            }

            function changerGalerie() {
                console.log('fonction changerGalerie');
                if (modeSombre) {
                    document.querySelector('.galerie-sombre').style.display = "block";
                    document.querySelector('.galerie-claire').style.display = "none";  
                    console.log('mode sombre/galerie sombre');
                } else {
                    document.querySelector('.galerie-claire').style.display = "block";
                    document.querySelector('.galerie-sombre').style.display = "none";
                    console.log('mode clair/galerie clair');
                }
            }
            
        });
    </script>


</head>

<body class="site <?php echo(is_front_page() ? 'no-aside' : ''); ?> ">

    <header class="site__entete">

        <section class="site__entete__nav">
            <?php the_custom_logo() ?>
            <input type="checkbox" id="cc-menu">
            <label class="logo-menu" for="cc-menu">&#9776;</label>
            <?php wp_nav_menu(array(
                'menu' => 'entete', 
                'container' => 'nav'
                ))
            ?>
            <?php get_search_form(); ?>
            <button id="btn-toggle-theme"><i class="fa-solid fa-moon"></i></button>
        </section>

        <section class="site__entete__titre">
            <h1><a href="<?= bloginfo('url') ?>"><?= bloginfo('name') ?></a></h1>
            <h2><?= bloginfo('description') ?></h2>
        </section>

    </header>
    <?php 
    if(! is_front_page()) {
        get_template_part('template-parts/aside');
    }
        
?>
    