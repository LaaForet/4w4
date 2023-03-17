<?php
/* Formulaire de recherche personnalisée */
?>

<form class="recherche" role="search" method="get"  action="<?php echo esc_url( home_url( '/' ) ); ?>">

  <label>
    <input class="recherche__input" type="search" class="search-field" placeholder="rechercher..." value="<?php echo get_search_query(); ?>" name="s" />
    <button class="recherche__bouton" type="submit" class="search-submit">
      <span class="recherche__icone"><i class="fa-solid fa-magnifying-glass"></i></span>
    </button>  
  </label>
  
</form>