<?php

/**
 * le modèle index
 * Représente le modèle par défaut
 */

?>

<?php get_header(); ?>

<main class="error-404">
   <section class="erreur-404">
  <div class="erreur-404__content">
    <h1 class="erreur-404__title">
      <?php echo get_theme_mod('section_404_title', 'Oups, page introuvable !'); ?>
    </h1>
    
    <p class="erreur-404__message">
      <?php echo get_theme_mod(
        'section_404_message',
        "Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. 
        Reprenez votre périple en cliquant sur 'Accueil' pour découvrir à nouveau nos voyages d’exception !"
      ); ?>
    </p>

    <a href="<?php echo home_url(); ?>" class="erreur-404__btn">
      Retour à l’accueil
    </a>
  </div>
</section>

    <img src="<?php echo get_template_directory_uri(); ?>/images/ilepalier.jpg" alt="Page 404" class="error-404__image">
</main>

<?php get_footer(); ?>
