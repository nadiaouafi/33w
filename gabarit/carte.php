<?php

/**
 * Template-part carte.php
 * Affiche une carte dans un conteneur flex
 */

$lien = '<a href="' . get_permalink() . '">Suite</a>';
?>
<article class="conteneur__carte">
    <?php the_post_thumbnail('thumbnail', ['alt' => get_the_title()]); ?>

    <h2><?php the_title(); ?></h2>
    <p><?= wp_trim_words(get_the_excerpt(), 10, $lien); ?></p>
    <p>Température minimum: <?php the_field('temperature_minimum'); ?>&deg;C</p>
    <p>Température maximum: <?php the_field('temperature_maximum'); ?>&deg;C</p>
    <p>Température moyenne: <?php the_field('temperature_moyenne'); ?>&deg;C</p>

    <p>appreciation: <?php the_field('Appreciation'); ?>1 a 5</p>

    <?php the_category(); ?>
</article>