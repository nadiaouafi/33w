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

function carte($cat_a_retirer = '') {
    $args = array(
        'posts_per_page' => 6,
        'category__not_in' => $cat_a_retirer ? array(get_cat_ID($cat_a_retirer)) : array(),
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        echo "<div class='destinations__list grille-destinations'>";
        while ($query->have_posts()) : $query->the_post(); ?>
            <article class="destinations__item">
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>">
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/bali.jpg" alt="Image par défaut">
                <?php endif; ?>
                <h3><?php the_title(); ?></h3>
                <p><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
                <a href="<?php the_permalink(); ?>" class="destinations__lien">Voir plus</a>
            </article>
        <?php endwhile;
        echo "</div>";
        wp_reset_postdata();
    else :
        echo "<p>Aucune destination trouvée.</p>";
    endif;
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



