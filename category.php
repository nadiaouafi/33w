<?php
// === category.php ===
?>

<?php get_header() ?>

<section class="populaire">
  <h2><?php single_cat_title() ?></h2>
  <?= category_description(); ?>
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
<?php get_footer();?>

<?php get_header(); ?>
<main class="category">
  <h1 class="category__titre">Catégorie : <?php single_cat_title(); ?></h1>
  <div class="category__liste">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="category__item">
        <?php the_post_thumbnail(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><?php the_excerpt(); ?></p>
      </article>
    <?php endwhile; endif; ?>
  </div>
  <?php carte('populaire'); ?>
<?php carte(0); ?>
</main>

<?php get_footer(); ?>

