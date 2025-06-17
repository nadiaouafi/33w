<body>
    <header class="entete">
        <div class="entete__contenu">
            <!-- img src="images/logo.png" alt="" class="entete__logo" / -->
            <figure class="entete__logo">
                <?= get_custom_logo(); ?>
            </figure>
            <label for="chk__menu" class="entete__burger">
                <img
                    src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000"
                    width="32"
                    height="32" />
            </label>

            <input type="checkbox" class="chk__menu" id="chk__menu" />
            <nav class="entete__nav">
                <!-- <ul class="entete__menu">
        <li class="entete__item"><a href="#" class="entete__lien">Accueil</a></li>
        <li class="entete__item"><a href="#" class="entete__lien">Destinations</a></li>
        <li class="entete__item"><a href="#" class="entete__lien">Offres</a></li>
        <li class="entete__item"><a href="#" class="entete__lien">Contact</a></li>
      </ul> -->

                <?php wp_nav_menu(array(
                    "menu" => "principal",
                    'container'            => '',
                    'container_class'      => '',
                    'menu_class'           => 'entete__menu',

                )); ?>
                <?php get_search_form() ?>
            </nav>
        </div>
    </header>