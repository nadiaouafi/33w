<?php
/**
 * Template-part : Page 404
 */


$section_404 = get_theme_mod('section_404', [
    'image' => get_template_directory_uri() . 'images/image1.png.jpg',
    'titre' => 'Oups ! Page introuvable',
    'message' => 'La page que vous cherchez n’existe pas.',
    'btn_text' => 'Retour à l’accueil',
    'btn_color' => '#007acc',
    'search_bg' => '#fff',
    'btn_url' => home_url()
]);
?>

<section class="erreur-404" style="background-image: url('<?php echo esc_url($section_404['image']); ?>')">
    <div class="erreur-404__contenu">
        <h1 class="erreur-404__titre"><?php echo esc_html($section_404['titre']); ?></h1>
        <p class="erreur-404__message"><?php echo esc_html($section_404['message']); ?></p>

        <!-- Menu 404 -->
        <nav class="erreur-404__menu">
            <?php wp_nav_menu([
                'theme_location' => 'menu-404',
                'container' => false,
                'menu_class' => 'erreur-404__liste'
            ]); ?>
        </nav>

        <!-- Zone de recherche -->
        <div class="erreur-404__search" style="background-color: <?php echo esc_attr($section_404['search_bg']); ?>;">
            <?php get_search_form(); ?>
        </div>

        <!-- Bouton retour -->
        <a href="<?php echo esc_url($section_404['btn_url']); ?>" class="erreur-404__btn" style="background-color: <?php echo esc_attr($section_404['btn_color']); ?>;">
            <?php echo esc_html($section_404['btn_text']); ?>
        </a>
    </div>
</section>
