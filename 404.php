<?php
/**
 * Template 404
 *
 * @package club-voyage
 */

get_header(); // Inclut header.php
?>

<main id="site-content" class="erreur-404-page">

    <?php
    // Appel du gabarit pour la 404
    get_template_part('gabarit/erreur', '404');
    ?>

</main>

<?php
get_footer(); // Inclut footer.php
