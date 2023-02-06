<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <header class="site__entete">
        <section class="site__entete__nav">
            <?php the_custom_logo() ?>
            <?php wp_nav_menu(array(
                'menu' => 'entete', 
                'container' => 'nav'
            )) ?>
        </section>
        <h1><a href="<?= bloginfo('url') ?>"><?= bloginfo('name') ?></a></h1>
        <h2><?= bloginfo('description') ?></h2>
    </header>