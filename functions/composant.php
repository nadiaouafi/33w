<?php
/**
 * Gabarits sous forme de fonctions. Chacune peut être paramétrée
 */

function icone_sociaux($couleur)
{
    // pour enlever le # de la position 0, on extrait à partir de la position 1
    $couleur = substr($couleur, 1);
    ?>
    <a class="sociaux" href="https://github.com/nadiaouafi/33w">
        <img src="https://s2.svgbox.net/social.svg?ic=github&color=<?= $couleur ?>" width="32" height="32">
    </a>
    <a class="sociaux" href="https://facebook.com">
        <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=<?= $couleur ?>" width="32" height="32">
    </a>
    <a class="sociaux" href="https://instagram.com">
    <img src="https://s2.svgbox.net/social.svg?ic=instagram&color=<?= $couleur ?>" width="32" height="32" alt="Instagram">
</a>

<a class="sociaux" href="https://twitter.com">
    <img src="https://s2.svgbox.net/social.svg?ic=twitter&color=<?= $couleur ?>" width="32" height="32" alt="Twitter">
</a>
    <?php
}

/**
 * Générateur de vague pour séparer deux sections
 */
function vague($couleur1) {
    echo '
    <div class="vague">
        <svg viewBox="0 0 1440 150" xmlns="http://www.w3.org/2000/svg">
            <path fill="'.$couleur1.'">
                <animate attributeName="d" dur="10s" repeatCount="indefinite"
                    values="
                        M0,40 C360,120 1080,-40 1440,40 L1440,0 L0,0 Z;
                        M0,60 C360,-20 1080,120 1440,60 L1440,0 L0,0 Z;
                        M0,40 C360,120 1080,-40 1440,40 L1440,0 L0,0 Z
                    " />
            </path>
        </svg>
    </div>';
}

function carte($cat_a_retirer) {
    $categories = get_categories(['exclude' => [$cat_a_retirer]]);
    foreach($categories as $cat) {
        $posts = get_posts([
            'category' => $cat->term_id,
            'numberposts' => 1
        ]);
        $img_url = ($posts && has_post_thumbnail($posts[0]->ID)) 
            ? get_the_post_thumbnail_url($posts[0]->ID, 'medium') 
            : get_template_directory_uri() . '/images/bali.jpg';

        echo '<div class="destination__card">';
        echo '<img src="'.$img_url.'" alt="'.$cat->name.'">';
        echo '<h3>'.$cat->name.'</h3>';
        echo '<a href="'.get_category_link($cat->term_id).'">Voir</a>';
        echo '</div>';
    }
}

 add_action('rest_api_init', function () {
    register_rest_route('destinations/v1', '/all', [
        'methods' => 'GET',
        'callback' => function() {
            $posts = get_posts(['post_type' => 'destination', 'numberposts' => -1]);
            $data = [];
            foreach($posts as $post){
                $data[] = [
                    'title' => $post->post_title,
                    'content' => $post->post_content,
                    'link' => get_permalink($post)
                ];
            }
            return $data;
        }
    ]);
});



function register_extra_menu() {
    register_nav_menu('extra-menu', __('Extra Menu', 'club-voyage'));
}
add_action('after_setup_theme', 'register_extra_menu');



// Menu 404
function theme_customize_register($wp_customize) {
    // Section pour la page 404
    $wp_customize->add_section('section_404', [
        'title' => __('Page 404', 'club-voyage'),
        'priority' => 30
    ]);

    // Image de fond
    $wp_customize->add_setting('section_404[image]', [
        'default' => get_template_directory_uri() . '/assets/img/404-default.jpg'
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_404_image', [
        'label' => __('Image de fond', 'club-voyage'),
        'section' => 'section_404',
        'settings' => 'section_404[image]'
    ]));

    // Titre
    $wp_customize->add_setting('section_404[titre]', ['default' => 'Oups ! Page introuvable']);
    $wp_customize->add_control('section_404_titre', [
        'label' => __('Titre', 'club-voyage'),
        'section' => 'section_404',
        'settings' => 'section_404[titre]'
    ]);

    // Message
    $wp_customize->add_setting('section_404[message]', ['default' => 'La page que vous cherchez n’existe pas.']);
    $wp_customize->add_control('section_404_message', [
        'label' => __('Message', 'club-voyage'),
        'section' => 'section_404',
        'settings' => 'section_404[message]'
    ]);

    // Texte du bouton
    $wp_customize->add_setting('section_404[btn_text]', ['default' => 'Retour à l’accueil']);
    $wp_customize->add_control('section_404_btn_text', [
        'label' => __('Texte du bouton', 'club-voyage'),
        'section' => 'section_404',
        'settings' => 'section_404[btn_text]'
    ]);
}
add_action('customize_register', 'theme_customize_register');
