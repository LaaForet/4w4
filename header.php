<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body class="site <?php echo(is_front_page() ? 'no-aside' : ''); ?> ">
    <header class="site__entete">
        <section class="site__entete__nav">
            <?php the_custom_logo() ?>
            <input type="checkbox" id="cc-menu" checked>
            <label class="logo-menu" for="cc-menu">&#9776;</label>
            <?php wp_nav_menu(array(
                'menu' => 'entete', 
                'container' => 'nav'
            )) ?>
            <?php get_search_form(); ?>
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
    