<footer class="pieddepage">
  <div class="pieddepage__contenu">

    <!-- Logo -->
    <div class="pieddepage__logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo Club Voyage" />
    </div>

    <!-- Menu principal -->
    <nav class="pieddepage__menu">
      <?php
        wp_nav_menu(array(
          "theme_location" => "menu-principal",
          "container" => false,
          "menu_class" => "pieddepage__liste"
        ));
      ?>
    </nav>

    <!-- Réseaux sociaux -->
    <div class="pieddepage__reseaux">
      <?php icone_sociaux('#000'); ?>
    </div>

    <!-- Liens de voyage -->
    <div class="pieddepage__colonne">
      <h4>Liens sur le voyage</h4>
      <ul>
        <li><a href="#">Air Transat</a></li>
        <li><a href="#">Air Canada</a></li>
        <li><a href="#">TripAdvisor</a></li>
        <li><a href="#">Booking.com</a></li>
        <li><a href="#">Airbnb</a></li>
        <li><a href="#">Expedia.ca</a></li>
      </ul>
    </div>

    <!-- Adresse et recherche -->
    <div class="pieddepage__colonne">
      <h4>Adresse et recherche</h4>
      <p>3800, Sherbrooke Est, Montréal, Québec, H1X 2A2</p>
      <p>514-254-7131</p>
      <?php get_search_form(); ?>
    </div>

    <!-- Mission -->
    <div class="pieddepage__colonne">
      <h4>Mission du club</h4>
      <p>
        Notre mission est d'inspirer et d'informer nos membres sur des destinations
        qui répondent à leurs attentes. Nous favorisons les échanges et le partage
        d’expériences à travers des activités sociales variées.
      </p>
    </div>

    <!-- Menu externe -->
    <div class="pieddepage__categories">
      <?php wp_nav_menu(array(
          "menu" => "externe",
          "container" => "nav",
          "menu_class" => "pieddepage__liste"
      )); ?>
    </div>

    <!-- Informations -->
    <div class="pieddepage__infos">
      <p>&copy; <?php echo date('Y'); ?> Club Voyage. Tous droits réservés.</p>
    </div>

  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
