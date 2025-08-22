<?php
/**
 * Template Part: Header_menu
 * Description: Nouveau menu, recherche, image et bouton
 */
?>

<div class="header-extra">

    <!-- Nouveau Menu avec Dropdown -->
    <nav class="header-extra__nav">
        <?php
        wp_nav_menu([
            'theme_location' => 'extra-menu',
            'container' => false,
            'menu_class' => 'header-extra__menu',
        ]);
        ?>
    </nav>

    <!-- Zone de Recherche -->
    <div class="header-extra__search">
        <?php get_search_form(); ?>
    </div>

    <!-- Image avec Hover -->
    <div class="header-extra__image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/exemple.jpg" alt="Image illustrative">
    </div>

    <!-- Bouton Animé -->
    <div class="header-extra__button">
        <a href="#" class="btn btn-primary">Cliquez ici</a>
    </div>
</div>