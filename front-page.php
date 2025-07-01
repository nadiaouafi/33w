<?php

/**
 * Le modèle  front-page
 * Permet d'afficher la page d'accueil 
 */
?>

<?php get_header() ?>

<section class="hero">
  <div class="hero__contenu">
    <h1 class="hero__titre">Club de voyage</h1>
    <p class="hero__description">
      Découvrez des destinations uniques et inoubliables avec notre agence.<br>
      Vivez des expériences authentiques, des paysages à couper le souffle et des aventures sur mesure.
    </p>
  </div>
</section>
<section class="populaire">
  <div class="conteneur global">
    <?php if (have_posts()) {
      while (have_posts()) {
        /* affiche l'image « mise en avant » miniature */
        the_post();
    ?>
        <?php
        if (in_category('galerie')) {
          get_template_part("gabarit/galerie");
        } else {
          get_template_part("gabarit/carte");
        ?>


    <?php }
      }
    } ?>
  </div>
</section>
<?php get_footer();