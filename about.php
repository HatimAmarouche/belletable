<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Belle Table</title>


    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link href="css/style3.css" rel="stylesheet">

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
            <li class="nav-item">
              <a class="nav-link" href="home.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.php">Magasin</a>
            </li>
            <li class="nav-item active">
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

    <h1 class="titre">Belle Table, Notre Histoire</h1>

      <hr width="50%" color="black" />
        </br>

    <div class="container">
     <div class="row">
       <div class="col-lg-4">
         <img src="css/slide1.jpg" />

       </div>
       <div class="texte col-lg-8">  <strong class="belletable">Belle Table</strong> est une entreprise créée par deux frères passionnés des arts de la table. Notre nom est représentatif de note activité. Nous étions à la base une petite entreprise familiale de seulement 4 salariés.
   Notre entreprise a connu un franc succès et nos clients ont tous été satisfaits de nos prestations. Les clients sont aujourd’hui très variés et nombreux. Tous types de professionnels faisant appel à la restauration font appel de façon régulière à Belle Table. Il y a des restaurants qui
   souhaitent compléter ou renouveler la vaisselle, les couverts, voir la totalité de leur salle de restauration, mais aussi des traiteurs (achats et surtout locations),
        </div>
     </div>
   </div>
</br>
   <div class="container">
    <div class="row">
      <div class="texte col-lg-8"> les organisateurs
   d’évènements, les associations, comités d’entreprise, principalement pour la location. C'est ainsi que Belle Table s'est agrandi et comprend aujourd'hui plus de 40 salariés.
   Nous sommes là pour vous accompagner à dresser votre "Belle Table" ; notre objectif est la vente et la location de tous les matériels, la vaisselle, les couverts, les tables et chaises.
   Nous vous proposons aussi un service de qualité inclulant la livraison, mise en place et installation de tous les matériels. Aucune autre société ne propose un service aussi
   complet et haut de gamme avec des articles de la table de luxe.
        </div>
          <div class="col-lg-4">
            <img src="css/slide.jpg" />
          </div>

    </div>
  </div>

  <br /><br /><br />

  <footer class="page-footer font-small unique-color-dark mt-4">

    <div style="background-color: #007BFF;">
      <div class="container">


        <div class="row py-4 d-flex align-items-center">


          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0"></h6>
          </div>

          <div class="col-md-6 col-lg-7 text-center text-md-right">

          </div>

        </div>


      </div>
    </div>


    <div class="container text-center text-md-left mt-5">


      <div class="row mt-3">


        <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-4">


          <h6 class="text-uppercase font-weight-bold">Mentions légales</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

          <p>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site <a href="http://www.belletable.fr/">www.belletable.fr</a> l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi.</p>


        </div>



        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">


          <h6 class="text-uppercase font-weight-bold">Products</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p><strong>Propriétaire</strong> : Belle Table – SARL – 75014<br />
          <strong>Créateur</strong>  : <a href="http://belletable.fr/">Amarouche Hatim</a><br />
          <strong>Responsable publication</strong> : Amarouche Hatim – hatim.professionnel@gmail.com<br />



        </div>

        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">


          <h6 class="text-uppercase font-weight-bold">UTILISATION</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <strong>Webmaster</strong> : Amarouche Hatim – hatim.professionnel@gmail.com<br />
            <strong>Hébergeur</strong> : Hostpapa – 92400<br />
            Crédits : Andy Kadiambu<br />
          </p>

        </div>



        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">


          <h6 class="text-uppercase font-weight-bold">Contact</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <i class="fa fa-home mr-3"></i> Paris, 75014, France</p>
          <p>
            <i class="fa fa-envelope mr-3"></i> services@belletable.com</p>
          <p>
            <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
          <p>
            <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>

        </div>


      </div>


    </div>



    <div class="footer-copyright text-center py-3">
      Copyright &copy; Amarouche Hatim & Andy Kadiambu
    </div>


  </footer>

    </body>

  </html>
