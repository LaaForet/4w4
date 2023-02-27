<?php
// Modèle par défaut 
?>
<?php get_header(); ?>

<main class="site__main">
    <h3>category.php</h3>
    <section class="blocflex">
      <?php
      $category = get_queried_object();
      $args = array(
         'category_name' => $category->slug,
         'orderby' => 'title',
         'order' => 'ASC'
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) :
         while ( $query->have_posts() ) : $query->the_post(); ?>
            <article>
               <?php 
               $titre = get_the_title();
               if ($category->slug == "coursa1" || "coursa2" || "coursa3") {
                  $titre = substr($titre, 0, 7);
               }
               ?>
               <h2><a href="<?php the_permalink(); ?>"> <?= $titre?></a></h2>
               <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
            </article>
         <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata();?>
   </section>
</main>


<?php get_footer(); ?>