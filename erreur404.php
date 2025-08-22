<?php

/**
 * le modèle index
 * Représente le modèle par défaut
 */

?>

<?php get_header(); ?>

<main class="error-404">
    <h1 class="error-404__title">Oups ! Page introuvable</h1>
    <p class="error-404__text">La page que vous cherchez n'existe pas ou a été déplacée.</p>
    <a href="<?php echo home_url(); ?>" class="error-404__home">Retour à l’accueil</a>

    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/404-illustration.svg" alt="Page 404" class="error-404__image">
</main>

<?php get_footer(); ?>
