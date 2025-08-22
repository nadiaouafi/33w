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

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scss/style.css" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="entete">
  <div class="entete__contenu">
    <figure class="entete__logo">
      <?php if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    } ?>
    </figure>

    <label for="chk__menu" class="entete__burger">
      <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="32" height="32" />
    </label>
    <input type="checkbox" class="chk__menu" id="chk__menu" />

    <nav class="entete__nav">
      <?php wp_nav_menu(array(
          "menu" => "principal",
          'container' => '',
          'menu_class' => 'entete__menu',
      )); ?>
      <?php get_search_form(); ?>
    </nav>
  </div>
</header>
