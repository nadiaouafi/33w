<footer class="pieddepage">
  <div class="pieddepage__contenu">

    <!-- Menu externe -->
    <section class="pieddepage__logo">
      <div class="pieddepage__lien">
        <?php
          wp_nav_menu(array(
            'menu'     => 'externe', 
            'container'=> 'nav',
            'menu_class' => 'pieddepage__liste'
          ));
        ?>
      </div>

      <!-- Adresse + recherche -->
      <div class="pieddepage__adresse">
        <h2>Adresse et recherche</h2>
        <p>123, rue des Voyages<br>Montréal (QC) H1A 2B3</p>
        <?php get_search_form(); ?>
      </div>

      <!-- Description optionnelle -->
      <div class="pieddepage__description">
        <p>Fait avec ❤️ au Collège Maisonneuve</p>
      </div>
    </section>

    <!-- Ligne avec icônes -->
    <section class="pieddepage__ligne-2">
      <div class="pieddepage__icone">
        <a href="#" aria-label="Facebook">
          <img src="<?= get_template_directory_uri(); ?>/images/facebook.png" alt="Facebook" />
        </a>
        <a href="#" aria-label="Instagram">
          <img src="<?= get_template_directory_uri(); ?>/images/insta.png" alt="Instagram" />
        </a>
        <a href="#" aria-label="Twitter">
          <img src="<?= get_template_directory_uri(); ?>/images/tweete.png" alt="Twitter" />
        </a>
      </div>
    </section>

  </div>
</footer>


<?php wp_footer(); ?>
</body>
</html>