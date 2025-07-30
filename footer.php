
 <footer class="pieddepage">
  <div class="pieddepage__contenu">
    
    <!-- Logo -->
     <section class="logo">
      <div class="pieddepage__logo">
      <img src="images/logo.png" alt="Logo Club Voyage" />
    </div>
    </section>
    

    <!-- Menu -->
     <section class="menu">
      <nav class="pieddepage__menu">
      <ul class="pieddepage__liste">
      
        <li class="entete__item"><a href="#" class="entete__lien">Aventure</a></li>
        <li class="entete__item"><a href="#" class="entete__lien">Culturel</a></li>
        <li class="entete__item"><a href="#" class="entete__lien">Zen</a></li>
        <li class="entete__item"><a href="#" class="entete__lien">Sport</a></li>
        <li class="entete__item"><a href="#" class="entete__lien">Croisieres</a></li>
        <li class="entete__item"><a href="#" class="entete__lien">Repos</a></li>
     
      </ul>
    </nav>
     </section>
    

    <!-- Réseaux sociaux -->
     <section class="reseaux">
        <div class="pieddepage__reseaux">
      <a href="#" aria-label="Facebook">
        <img src="images/facebook.png" alt="Facebook" />
      </a>
      <a href="#" aria-label="Instagram">
        <img src="images/insta.png" alt="Instagram" />
      </a>
      <a href="#" aria-label="Twitter">
        <img src="images/tweete.png" alt="Twitter" />
      </a>
      </div>
     </section>
    

  
<?php
$footer_couleur1 = "#fbfbfc"; 
$footer_couleur2 = "rgb(66, 209, 235)"; 
vague($footer_couleur1, $footer_couleur2);
?>
<footer class="piedpage">
    <div class="piedpage__contenu">

        <div class="piedpage__colonne">
            <h4>Liens sur le voyage</h4>
            <ul>
                <li><a href="#">Air Transat</a></li>
                <li><a href="#">Air Canada</a></li>
                <li><a href="#">TripAdvisor</a></li>
                <li><a href="#">Booking.com</a></li>
                <li><a href="#">Airbnb</a></li>
                <li><a href="#">Expedia.ca</a></li>
            </ul>
            <div class="piedpage__social">
                <?php icone_sociaux('#000'); ?>
                
            </div>
        </div>

       
        <div class="piedpage__colonne">
            <h4>Adresse et recherche</h4>
            <p>3800, Sherbrooke Est, Montréal, Québec, H1X 2A2</p>
            <p>514‑254‑7131</p>
            <?php get_search_form() ?>
        </div>

       
        <div class="piedpage__colonne">
            <h4>Mission du club</h4>
            <p>
                Notre mission est d'inspirer et d'informer nos membres sur des destinations
                qui répondent à leurs attentes. Nous favorisons les échanges et le partage
                d’expériences à travers des activités sociales variées.
            </p>
        </div>

    </div>


    <div class="piedpage__categories">
        <?php wp_nav_menu(array(
            "menu" => "externe",
            "container" => "nav",
            "menu_class" => "piedpage__liste"
        )) ?>
    </div>

      <!-- Informations -->
    <section class="infos">
      <div class="pieddepage__infos">
      <p>&copy; <?php echo date('Y'); ?> Club Voyage. Tous droits réservés.</p>
    
    </div>

    </section>
  </div>

</footer>
<?php wp_footer(); ?>
</body>
</html>
