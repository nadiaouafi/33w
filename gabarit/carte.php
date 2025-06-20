<?php
/**
 * Template-part carte.php
 * Affiche une carte dans un conteneur flex
 */

// Sécurise l'URL et échappe correctement les attributs HTML
$lien = '<a href="' . esc_url(get_permalink()) . '">Suite</a>';
?>
<article class="conteneur__carte">
    <?php the_post_thumbnail('miniature'); ?>
    <h2><?php the_title(); ?></h2>
    <p>
        <?php echo wp_kses_post(wp_trim_words(get_the_excerpt(), 10, '... ' . $lien)); ?>
    </p>
</article>