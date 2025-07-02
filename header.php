<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php if (!function_exists('_wp_render_title_tag')): ?>
    <title><?php bloginfo('name'); ?></title>
  <?php endif; ?>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&family=Poppins:wght@300;500;700&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>normalize.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scss/style.css" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="entete">
    <div class="entete__logo">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo Mondo Voyages" />
      </a>
    </div>

    <nav class="entete__nav"><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <?php wp_head(); ?>
</head>

<body>
    <header class="entete">
        <div class="entete__contenu">
            <!-- img src="images/logo.png" alt="" class="entete__logo" / -->
            <figure class="entete__logo">
                <?= get_custom_logo(); ?>
            </figure>
            <label for="chk__menu" class="entete__burger">
                <img
                    src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000"
                    width="32"
                    height="32" />
            </label>

            <input type="checkbox" class="chk__menu" id="chk__menu" />
            <nav class="entete__nav">
                <!-- ul class="entete__menu">
                    <li class="entete__menu-item"><a href="#">Aventure</a></li>
                    <li class="entete__menu-item"><a href="#">Culturel</a></li>
                    <li class="entete__menu-item"><a href="#">Zen</a></li>
                    <li class="entete__menu-item"><a href="#">Sport</a></li>
                    <li class="entete__menu-item"><a href="#">Croisière</a></li>
                    <li class="entete__menu-item"><a href="#">Repos</a></li>
                </ul -->

                <?php wp_nav_menu(array(
                    "menu" => "principal",
                    'container'            => '',
                    'container_class'      => '',
                    'menu_class'           => 'entete__menu',

                )); ?>
                <?php get_search_form() ?>
            </nav>
        </div>
    </header>
       <?php wp_nav_menu(array(
                    "menu" => "principal",
                    'container'            => '',
                    'container_class'      => '',
                    'menu_class'           => 'entete__menu',

                )); ?>
                
    </nav>

    <form class="recherche" method="get" action="<?php echo home_url(); ?>" aria-label="Formulaire de recherche">
      <input class="recherche__input" type="search" name="s" placeholder="Rechercher...">
      <button class="recherche__bouton">
        <img src="https://s2.svgbox.net/hero-solid.svg?ic=search&color=000" width="15" height="15" alt="Icône recherche" />
      </button>
    </form>
  </header>
