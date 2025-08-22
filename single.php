<?php
// === single.php ===
?>


<?php get_header() ?>

<section class="populaire">
  <?php if (have_posts()) {
    while (have_posts()) {
      /* affiche l'image « mise en avant » miniature */
      the_post();
      the_post_thumbnail('large');
  ?>
      <h1><?php
          /* affiche le titre pricipal du « post » */
          the_title(); ?></h1>

  <?php
      /* cette fontion permet d'afficher l'ensemble du contenu (même les images) du post (article ou page)*/
      the_content();
      edit_post_link();
    }
  } ?>
</section>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<article class="destination">
    <h1><?php the_title(); ?></h1>
    <div class="destination__meta">
        <span><?php the_author(); ?></span>
        <span><?php the_date(); ?></span>
        <span><?php the_category(', '); ?></span>
    </div>
    <div class="destination__image">
        <?php 
        if(has_post_thumbnail()) {
            the_post_thumbnail();
        } else {
            echo '<img src="'.get_template_directory_uri().'/assets/img/default.jpg" alt="Default">';
        }
        ?>
    </div>



    <div class="destination__content"><?php the_content(); ?></div>
    <div class="destination__info">
        <span>Température max : <?php echo get_post_meta(get_the_ID(), 'temperature', true); ?>°C</span>
         <span>Température min : <?php echo get_post_meta(get_the_ID(), 'temperature', true); ?>°C</span>
        <span>Appréciation : <?php echo get_post_meta(get_the_ID(), 'niveau', true); ?>  1 a 5</span>
    </div>
</article>
<?php endwhile; endif; ?>



<?php get_footer();
