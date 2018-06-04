<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Belle Table</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="logo navbar-brand" href="home.php">Belle Table</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.php">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>

<?php
if(empty($_SESSION["connexion"])) {
  ?>
            <li class="button1 nav-item">
              <a class="btn btn-primary btn-xl" href="inscription.php">Inscription</a>
            </li>
            <li class="button1 nav-item">
              <a class="btn btn-primary btn-xl" href="connexion.php">Connexion</a>
            </li>
<?php } ?>
          <?php if(isset($_SESSION["admin"])) {
              ?>
            <li class="nav-item">
              <a class="nav-link" href="admin.php"> Admin </a>
            </li>
          <?php }
             ?>

             <?php if(isset($_SESSION["connexion"])) { ?>
             <li>
              <a class="btn btn-primary btn-xl" href="deconnect.php">Déconnexion</a>
            </li>
          <?php }
            ?>
          </ul>
        </div>
      </div>
    </nav>

    <header class="tete">
       <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong class="presentation">Bienvenue<br /> sur Belle Table</strong>
            <hr width="50%" color="#FFA07A" />
            </h1>

          </div>
          <div class="col-lg-8 mx-auto">
            <p class="texto text-faded mb-5">Nous sommes une entreprise de préstation de services dans l'évènementiel. Dressez votre "Belle Table" avec nous !</p>
            <a class="btn btn-primary btn-xl" href="index3.html">Apprenez-en plus sur nous !</a>
          </div>
        </div>
      </div>


    </header>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

<!-- Footer -->
<footer class="page-footer font-small unique-color-dark mt-4">

  <div style="background-color: #007BFF;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us on social networks!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Mentions légales</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

        <p>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site <a href="http://www.belletable.fr/">www.belletable.fr</a> l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi.</p>


      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Products</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p><strong>Propriétaire</strong> : Belle Table – SARL – 75014<br />
        <strong>Créateur</strong>  : <a href="http://belletable.fr/">Amarouche Hatim</a><br />
        <strong>Responsable publication</strong> : Amarouche Hatim – htm_tremblay@hotmail.fr<br />
        Le responsable publication est une personne physique ou une personne morale.<br />


      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <strong>Webmaster</strong> : Amarouche Hatim – hatim.professionnel@gmail.com<br />
          <strong>Hébergeur</strong> : Hostpapa – 92400<br />
          Crédits : Andy Kadiambu<br />
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
        <p>
          <i class="fa fa-envelope mr-3"></i> info@example.com</p>
        <p>
          <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
        <p>
          <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
    Copyright &copy; Amarouche Hatim & Andy Kadiambu
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

  </body>

</html>
