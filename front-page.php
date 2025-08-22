<?php

/**
 * Le modèle  front-page
 * Permet d'afficher la page d'accueil 
 */
?>
<?php get_header() ?>
<!-- section hero -->

<?php get_template_part('template-parts/header', 'extra'); ?>


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



<!-- section rest-api -->
<section class="destination">
 
  <h2 class="destination__titre">Articles de la catégorie</h2>
  <div class="destination__list"></div>
  <?php carte('populaire'); ?>
</section>

<section class="accordion-section">
    <h2 class="accordion-section__title">Nos destinations</h2>
    <div id="accordion" class="accordion">
        <!-- Les éléments seront ajoutés dynamiquement via JS -->
    </div>
</section>

<section class="newsletter-section">
    <h2 class="newsletter-section__title">Inscrivez-vous à notre infolettre</h2>

    <?php
    // Traitement du formulaire
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['newsletter_submit'])) {
        $nom = sanitize_text_field($_POST['nom']);
        $prenom = sanitize_text_field($_POST['prenom']);
        $email = sanitize_email($_POST['email']);

        // Exemple : envoyer un email à l'admin (ou sauvegarder dans la base)
        wp_mail(get_bloginfo('admin_email'), 'Nouvelle inscription', "Nom : $nom\nPrénom : $prenom\nEmail : $email");

        echo '<p class="newsletter-section__success">Merci pour votre inscription !</p>';
    }
    ?>

    <form class="newsletter-form" method="post">
        <input type="text" name="nom" placeholder="Nom" required>
        <input type="text" name="prenom" placeholder="Prénom" required>
        <input type="email" name="email" placeholder="Courriel" required>
        <button type="submit" name="newsletter_submit">S’inscrire</button>
    </form>
</section>


<?php get_footer();