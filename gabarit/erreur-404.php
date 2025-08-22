<?php
/**
 * Template-part : Page 404
 */

$section_404 = get_theme_mod('section_404', [
    'image' => get_template_directory_uri() . '/assets/img/404-default.jpg',
    'titre' => 'Oups ! Page introuvable',
    'message' => 'La page que vous cherchez n’existe pas.',
    'btn_text' => 'Retour à l’accueil',
    'btn_url' => home_url()
]);
?>

<section class="erreur-404" style="background-image: url('<?php echo esc_url($section_404['image']); ?>')">
    <div class="erreur-404__contenu">

        <!-- Titre et message -->
        <h1 class="erreur-404__titre"><?php echo esc_html($section_404['titre']); ?></h1>
        <p class="erreur-404__message"><?php echo esc_html($section_404['message']); ?></p>

        <!-- Menu 404 -->
        <nav class="erreur-404__menu">
            <?php
            wp_nav_menu([
                'theme_location' => 'menu-404',
                'container' => false,
                'menu_class' => 'erreur-404__liste'
            ]);
            ?>
        </nav>

        <!-- Zone de recherche -->
        <div class="erreur-404__search">
            <?php get_search_form(); ?>
        </div>

        <!-- Bouton retour -->
        <a href="<?php echo esc_url($section_404['btn_url']); ?>" class="erreur-404__btn">
            <?php echo esc_html($section_404['btn_text']); ?>
        </a>

    </div>
</section>
