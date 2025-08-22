<?php

/**
 * Le modèle  front-page
 * Permet d'afficher la page d'accueil 
 */
?>
<?php get_header() ?>
<!-- section hero -->


  
</section>



<section class="hero">
  <?php
  $hero_background[0] = get_theme_mod("hero_background_0");
  $hero_background[1] = get_theme_mod("hero_background_1");
  $hero_background[2] = get_theme_mod("hero_background_2");
  ?>
  <div class="carrousel" style="background-image: url('<?= $hero_background[0] ?>'); opacity:1"></div>
  <div class="carrousel" style="background-image: url('<?= $hero_background[1] ?>'); opacity:0"></div>
  <div class="carrousel" style="background-image: url('<?= $hero_background[2] ?>'); opacity:0"></div>
  <form class="carrousel__form">
    <input type="radio" class="carrousel__radio" name="carrousel__radio">
    <input type="radio" class="carrousel__radio" name="carrousel__radio">
    <input type="radio" class="carrousel__radio" name="carrousel__radio">
  </form>


  <?php get_template_part("gabarit/hero"); ?>
</section>

<!-- section populaire -->
<section class="populaire">
  <?php get_template_part("gabarit/populaire"); ?>
</section>

<section class="destination">
  <h2 class="destination__titre">Articles de la catégorie</h2>
  <div class="destination__list">
      <div class="grille-destinations">
    <article class="destination">
      <img src="33w/images/bali.jpg" alt="Plage paradisiaque de Bali">
      <h3>Bali, Indonésie</h3>
      <p>Plages paradisiaques, temples et rizières luxuriantes.</p>
    </article>
    <article class="destination">
      <img src="images/rome.jpg" alt="Colisée de Rome">
      <h3>Rome, Italie</h3>
      <p>Un voyage au cœur de l’histoire et de la gastronomie.</p>
    </article>
    <article class="destination">
      <img src="images/marrakech.jpg" alt="Souks de Marrakech">
      <h3>Marrakech, Maroc</h3>
      <p>Marchés colorés, médina animée et montagnes de l’Atlas.</p>
    </article>
  </div>
  </div>
</section>

<!-- section rest-api -->
<section class="destination">
 
  <h2 class="destination__titre">Articles de la catégorie</h2>
  <div class="destination__list"></div>
</section>


<?php get_footer();