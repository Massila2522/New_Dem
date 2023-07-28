<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>

  <!-- my css link -->
  <link rel="stylesheet" href="style.css">

  <!-- swiper css link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

</head>
<body>

<!-- header section starts -->

<section class="header">

  <a href="index.html" class="logo">
    <img src="images/logo1.png" alt="">
  </a>

  <nav class="navbar">

    <a href="index.html">acceuil</a>
    <a href="formules.html">formules déménagement</a>
    <a href="services.html">services</a>
    <a href="devis.html">devis</a>
    <a href="contact.php">contact</a>

  </nav>

  <div id="bars">
    <i class="fa-solid fa-bars"></i>
  </div>

</section>

<!-- header section ends -->

<!-- contact section starts -->

<section class="contact">

  <div class="container">
    <h1>contactez-nous !</h1>

    <div class="contact-box">

      <div class="contact-left">

        <h3>envoyez votre message</h3>

        <!-- action="https://formspree.io/f/xjvqgveg"  -->

        <form action="contact_form.php" method="post">
          <!-- action="https://formsubmit.co/massila15@gmail.com" -->

          <div class="input-row">

            <div class="input-group">
              <label for="nom">nom</label>
              <input type="text" name="nom" placeholder="votre nom" id="nom">
            </div>

            <div class="input-group">
              <label for="prenom">prénom</label>
              <input type="text" name="prenom" placeholder="votre prénom" id="prenom">
            </div>

          </div>

          <div class="input-row">

            <div class="input-group">
              <label for="email">email</label>
              <input type="email" name="email" placeholder="votre adresse mail" id="email">
            </div>

            <div class="input-group">
              <label for="sujet">sujet</label>
              <input type="text" name="sujet" placeholder="votre sujet" id="sujet">
            </div>

          </div>

          <label for="message">message</label>
          <textarea rows="5" name="message" placeholder="votre message" id="message"></textarea>

          <input type="submit" value="envoyer" class="btn_contact" name="envoyer">

        </form>
    
      </div>

      <div class="contact-right">

        <h3>nos coordonnées</h3>

        <table>

          <tr>
            <td>email</td>
            <td>newdemenagement@gmail.com</td>
          </tr>

          <tr>
            <td>téléphone</td>
            <td>06 15 53 86 77</td>
          </tr>

          <tr>
            <td>horaires</td>
            <td>Du lundi au Samedi<br>De 9 à 12h et de 14h à 20h</td>
          </tr>

        </table>

      </div>

    </div>

  </div>

</section>

<!-- contact section ends  -->














<!-- footer section starts -->

<section class="footer">

  <div class="box-container">

    <div class="box">

      <h3>raccourcis</h3>
      <a href="index.html"><i class="fas fa-angle-right"></i>acceuil</a>
      <a href="formules.html"><i class="fas fa-angle-right"></i>formules déménagement</a>
      <a href="services.html"><i class="fas fa-angle-right"></i>services</a>
      <a href="devis.html"><i class="fas fa-angle-right"></i>devis</a>
      <a href="contact.php"><i class="fas fa-angle-right"></i>informations et contact</a>

    </div>

    <div class="box">

      <h3>à propos</h3>
      <a href="services.html"><i class="fas fa-angle-right"></i>Qui sommes-nous ?</a>
      <a href="services.html"><i class="fas fa-angle-right"></i>Notre priorité</a>
      <a href="services.html"><i class="fas fa-angle-right"></i>Les avantage de NEW DEM</a>
      <a href="services.html"><i class="fas fa-angle-right"></i>Fonctionnement</a>
      <a><i class="fas fa-angle-right"></i>CGU</a>
      <a><i class="fas fa-angle-right"></i>Politique de confidentialité</a>

    </div>

    <div class="box">

      <h3>Entreprise</h3>
      <a><i class="fas fa-angle-right"></i>Mutation professionnelle</a>
      <a><i class="fas fa-angle-right"></i>Déménagement d'entreprise</a>
      <a><i class="fas fa-angle-right"></i>Déménagement militaires</a>
      <a><i class="fas fa-angle-right"></i>Espace partenaire</a>

    </div>

    <div class="box">

      <h3>Contact</h3>
      <h4>Service commercial</h4>
      <a><i class="fas fa-angle-right"></i>Téléphone: 06 15 53 86 77</a>
      <a><i class="fas fa-angle-right"></i>Mail: contact@newdemenagement@gmail.com</a>
      <h4>Service exploitation</h4>
      <a><i class="fas fa-angle-right"></i>Téléphone:</a>
      <a><i class="fas fa-angle-right"></i>Mail: </a>
      <h4>Service après vente</h4>
      <a><i class="fas fa-angle-right"></i>Mail: </a>

    </div>

    <div class="box">

      <h3>Conseils</h3>
      <a><i class="fas fa-angle-right"></i>Comment déménager à moindre cout ?</a>
      <a><i class="fas fa-angle-right"></i>Prix d'un déménagement</a>
      <a><i class="fas fa-angle-right"></i>Choisir un déménageur</a>
      <a><i class="fas fa-angle-right"></i>Formule à choisir</a>
      <a><i class="fas fa-angle-right"></i>Organiser un déménagement long distance</a>
      <a><i class="fas fa-angle-right"></i>Laisser son logement propre</a>

    </div>

    <div class="box">

      <h3>Services</h3>
      <a><i class="fas fa-angle-right"></i>Déménagement local</a>
      <a><i class="fas fa-angle-right"></i>Déménagement national</a>
      <a><i class="fas fa-angle-right"></i>Déménagement Europe</a>
      <a><i class="fas fa-angle-right"></i>Déménagement international</a>
      <a><i class="fas fa-angle-right"></i>Location camion déménagement</a>
      <a><i class="fas fa-angle-right"></i>Location garde-meuble</a>
      <a><i class="fas fa-angle-right"></i>Location monte-meubles</a>
      <a><i class="fas fa-angle-right"></i>Vente des emballages</a>
      <a><i class="fas fa-angle-right"></i>Déménagement piano</a>

    </div>

     <div class="box">

      <h3>Horaires</h3>
      <a><i class="fas fa-angle-right"></i>Du lundi au samedi 9h00-19h00</a>
      
    </div>

  </div>

</section>

<!-- footer section ends -->













<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- my js link -->
<script src="script.js"></script>


</body>
</html>