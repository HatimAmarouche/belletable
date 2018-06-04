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
    <link href="css/style3.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->

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
              <a class="nav-link" href="shop.php">Shop</a>
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

  <footer class="py-5">
  <div class="container">
    <p class="m-1 text-center text-dark">Copyright &copy; Amarouche Hatim & Andy Kadiambu</p>
  </div>
  </footer>

    </body>

  </html>
