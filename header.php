<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mondo Voyages</title>
   <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
 
  <?php wp_head(); ?>

</head>
<body>
  <header class="entete">
    <div class="entete__logo">
        <img src="images/logo.png" alt="" >
    </div>
    <nav class="entete__nav">
     <ul class="entete__menu">
        <li class="entete__item"><a href="#" class="entete__lien">Aventure</a></li>
        <li class="entete__item"><a href="#" class="entete__lien">Culturel</a></li>
        <li class="entete__item"><a href="#" class="entete__lien">Zen</a></li>
        <li class="entete__item"><a href="#" class="entete__lien">Sport</a></li>
        <li class="entete__item"><a href="#" class="entete__lien">Croisieres</a></li>
        <li class="entete__item"><a href="#" class="entete__lien">Repos</a></li>
      </ul>
      <?php wp_nav_menu(array(
        "menu"=>"principal"
      ))
      ?>
    </nav>
    <form class="recherche" action="">
          <input class="recherche__input" type="search" name="" id="" />
          <button class="recherche__bouton">
            <img
              src="https://s2.svgbox.net/hero-solid.svg?ic=search&color=000"
              width="15"
              height="15"
            />
          </button>
        </form>
  </header>