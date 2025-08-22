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
<section class="destinations">
  <h2 class="destinations__titre">Articles de la catégorie</h2>
  <div class="destinations__list grille-destinations">

    <?php
    // Récupérer les articles de la catégorie "destinations"
    $args = array(
      'category_name'  => 'destinations', // slug de ta catégorie
      'posts_per_page' => 6               // nombre d’articles à afficher
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :
      while ($query->have_posts()) : $query->the_post(); ?>
        
        <article class="destinations__item">
          <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>">
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" alt="Image par défaut">
          <?php endif; ?>

          <h3><?php the_title(); ?></h3>
          <p><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
          <a href="<?php the_permalink(); ?>" class="destinations__lien">Voir plus</a>
        </article>

      <?php endwhile;
      wp_reset_postdata();
    else : ?>
      <p>Aucune destination trouvée.</p>
    <?php endif; ?>

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
