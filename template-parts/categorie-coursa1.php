<!-- Template part pour afficher un bloc flex des cours de la première année au TIM -->
<?php 
    $titre = get_the_title();
    $sigle = substr($titre, 0, 6);
    $titre_long = substr($titre, 7, -6);
    // $duree = substr($titre, '(', 5);
    $duree = '60';
?>

<article class="blocFlex__article">
    <h3><a href="<?php the_permalink(); ?>"> <?= $sigle?></a></h3>
    <h5><?= $titre_long?></h5>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
    <h6><?= $duree?></h6>
</article>