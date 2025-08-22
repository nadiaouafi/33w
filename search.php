<?php
/**
 * le modèle index
 * Représente le modèle par défaut
 */

?>

<?php get_header() ?>

<section class="populaire">
  <?php if (have_posts()) {
    while (have_posts()) {
      /* affiche l'image « mise en avant » miniature */
      the_post();
      the_post_thumbnail('thumbnail');
  ?>
      <h1><?php
          /* affiche le titre pricipal du « post » */
          the_title(); ?></h1>

  <?php
      /* cette fontion permet d'afficher l'ensemble du contenu du post (article ou page)*/
      the_content();
    }
  } ?>
</section>

<?php get_header(); ?>

<main class="search-page">
    <h1 class="search-page__title">Résultats de recherche</h1>

    <p class="search-page__count">
        <?php
        global $wp_query;
        echo 'Nombre de résultats : ' . $wp_query->found_posts;
        ?>
    </p>

    <section class="search-page__results">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <article class="search-post">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium'); ?>
                    <h2><?php the_title(); ?></h2>
                </a>
            </article>
        <?php endwhile; else: ?>
            <p>Aucun résultat trouvé.</p>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>

<?php get_footer();