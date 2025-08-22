<?php

/**
 * Configuration général du thème
 * 
 */
function mon_theme_supports()
{
    add_theme_support('post-thumbnails');
    add_image_size('miniature', 75, 75, true); // Taille carrée
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('custom-logo', array(
        'height'      => 75,
        'width'       => 75,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'mon_theme_supports');



function theme_tp_enqueue_styles()
{
    wp_enqueue_style('normalize', get_template_directory_uri() . '/normalize.css');

    $css_path = get_template_directory() . '/style.css';
    $css_url  = get_template_directory_uri() . '/style.css';


    wp_enqueue_style(
        'main-style',
        $css_url,
        array(),
        filemtime($css_path),
        null
    );

    $script_path = get_template_directory() . '/script/checkbox.js';
    $script_url  = get_template_directory_uri() . '/script/checkbox.js';

    wp_enqueue_script(
        'mon-script',
        $script_url,
        array(),
        filemtime($script_path),
        true
    );
   

    $script_path = get_template_directory() . '/script/carrousel.js';
    $script_url  = get_template_directory_uri() . '/script/carrousel.js';

     wp_enqueue_script(
        'mon-carrousel',
        $script_url,
        array(),
        filemtime($script_path),
        true
    );

    $script_path = get_template_directory() . '/script/destination.js';
    $script_url  = get_template_directory_uri() . '/script/destination.js';

     wp_enqueue_script(
        'destination',
        $script_url,
        array(),
        filemtime($script_path),
        true
    );
  
}
add_action('wp_enqueue_scripts', 'theme_tp_enqueue_styles');


/**
 * Modifie la requete principale de WordPress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas ci nous filtrons la requête de la page d'accueil
 */
function modifie_requete_principal($query)
{
    if ($query->is_home() && $query->is_main_query() && ! is_admin()) {
        $query->set('category_name', 'populaire');
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
    }
}
add_action('pre_get_posts', 'modifie_requete_principal');

// === Customizer Hero Carrousel ===
function hero_carrousel_customizer($wp_customize) {
    // Panneau Hero
    $wp_customize->add_panel('hero_panel', array(
        'title' => __('Section Hero', 'club-voyage'),
        'priority' => 10,
    ));

    // Section Carrousel
    $wp_customize->add_section('hero_carrousel_section', array(
        'title' => __('Carrousel Hero', 'club-voyage'),
        'panel' => 'hero_panel',
    ));

    // Nombre d’images
    $wp_customize->add_setting('hero_carrousel_count', array(
        'default' => 3,
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('hero_carrousel_count', array(
        'label' => __('Nombre d’images', 'club-voyage'),
        'section' => 'hero_carrousel_section',
        'type' => 'number',
    ));

    // Génération dynamique des images
    $count = get_theme_mod('hero_carrousel_count', 3);
    for ($i = 0; $i < $count; $i++) {
        $wp_customize->add_setting("hero_carrousel_img_$i", array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            "hero_carrousel_img_$i",
            array(
                'label' => __("Image $i", 'club-voyage'),
                'section' => 'hero_carrousel_section',
                'settings' => "hero_carrousel_img_$i",
            )
        ));
    }
}
add_action('customize_register', 'hero_carrousel_customizer');
