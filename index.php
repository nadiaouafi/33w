<?php get_header(); ?>

<main class="hero">
  <img src="images/acores.jpg" alt="Vue des Açores, paysage naturel" >
  <div class="hero__contenu">
    <h1 class="hero__titre">Voyagez Autrement avec Mondo Voyages !</h1>
    <p class="hero__texte">
      Découvrez des destinations uniques et inoubliables avec notre agence.<br>
      Vivez des expériences authentiques, des paysages à couper le souffle et des aventures sur mesure.
    </p>
    <p class="hero__coordonnees">
      info@cmaisonneuve.qc.ca<br>
      3800, rue Sherbrooke, Montréal<br>
      514-254-7131
    </p>
    <button class="hero__bouton">S'inscrire</button>
  </div>
</main>

<section class="formulaire-inscription">
  <input type="text" class="formulaire-inscription__champ" placeholder="Nom">
  <input type="text" class="formulaire-inscription__champ" placeholder="Prénom">
  <input type="email" class="formulaire-inscription__champ" placeholder="Courriel">
  <input type="tel" class="formulaire-inscription__champ" placeholder="Téléphone">
  <button class="formulaire-inscription__bouton">S'INSCRIRE</button>
</section>

<section class="destinations-populaires">
  <h2>Destinations populaires</h2>
  <div class="grille-destinations">
    <article class="destination">
      <img src="images/bali.jpg" alt="Plage paradisiaque de Bali">
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
</section>

<section class="galerie">
  <?php if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
  <?php
    endwhile;
  endif;
  ?>

  <h2 class="galerie__titre">Destinations en vedette</h2>
  <div class="galerie__grille">
    <figure class="galerie__item">
      <img src="images/img-grece.jpg" alt="Paysage de Grèce">
      <figcaption>Grèce</figcaption>
    </figure>
    <figure class="galerie__item">
      <img src="images/img-italie.jpg" alt="Paysage d'Italie">
      <figcaption>Italie</figcaption>
    </figure>
    <figure class="galerie__item">
      <img src="images/img-maldive.jpg" alt="Plage aux Maldives">
      <figcaption>Maldives</figcaption>
    </figure>
    <figure class="galerie__item">
      <img src="images/img-venise.jpg" alt="Canaux de Venise">
      <figcaption>Venise</figcaption>
    </figure>
    <figure class="galerie__item">
      <img src="images/img-japon.jpg" alt="Paysage du Japon">
      <figcaption>Japon</figcaption>
    </figure>
    <figure class="galerie__item">
      <img src="images/img-suisse.jpg" alt="Montagnes en Suisse">
      <figcaption>Suisse</figcaption>
    </figure>
  </div>
</section>

<?php get_footer(); ?>
