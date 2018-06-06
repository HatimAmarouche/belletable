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


  <link href="css/style2.css" rel="stylesheet">

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
            <li class="nav-item active">
              <a class="nav-link" href="shop.php">Magasin</a>
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
              <a class="button btn btn-primary btn-xl" href="connexion.php">Connexion</a>
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

<div class="container">

  <div class="row">

    <div class="col-lg-6">


      </div>

    </div>


    <div class="col-lg-12">

    <h1 class="title1 text-center"> LOCATION MATÉRIEL ART DE LA TABLE </h1>
            <hr width="70%" color="black" />
    <p class="p1 text-center"> Vous trouverez ici des tables, assiettes, verrerie et couverts d'exception à louer afin de dresser votre "Belle Table". <br />
    Vous en aurez pour tous les goûts ! Créez votre ambiance, c'est tout un art ! </p>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="css/table.png" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a>Table Ronde 150cm infugée</a>
              </h4>
              <h5>24.99€</h5>
              <p class="card-text">Cette table ronde, simple et fonctionnelle, peut accueillir jusqu''à 8/10 convives. Mode d''emploi : recouvrez la table d''un molleton coton ou synthétique et d''une nappe. Lot de 5 tables.</p>
            </div>
            <div class="unecarte card-footer">


            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="css/table1.png" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a>Table Ronde 170cm</a>
              </h4>
              <h5>29.99€</h5>
              <p class="card-text">Cette table ronde, simple et fonctionnelle, peut accueillir jusqu''à 8/10 convives. Mode d''emploi : recouvrez la table d''un molleton coton ou synthétique et d''une nappe. Lot de 5 tables.</p>
            </div>
            <div class="unecarte card-footer">

            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="css/table2.png" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a>Table Ronde 180cm</a>
              </h4>
              <h5>34.99€</h5>
<p class="card-text">Cette table ronde, simple et fonctionnelle, peut accueillir jusqu''à 8/10 convives. Mode d''emploi : recouvrez la table d''un molleton coton ou synthétique et d''une nappe. Lot de 5 tables.</p>
            </div>
            <div class="unecarte card-footer">

            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="css/assiette.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a>Vague</a>
                </h4>
                <h5>9.99€</h5>
          <p class="card-text">Tout en transparence et en courbes arrondies, la ligne Vague apportera pureté et élégance à votre réception grâce à ses 6 modèles de tasses et assiettes. </p>
              </div>
              <div class="unecarte card-footer">

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="css/assiette1.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a>Khéops</a>
                </h4>
                <h5>14.99€</h5>
          <p class="card-text">Offrez-vous un voyage en Mésopotamie avec la ligne d''assiettes graphique Khéops en verre vert transparent. Lot de 6 assiettes et tasses.</p>
              </div>
              <div class="unecarte card-footer">

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="css/assiette2.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a>Onyx</a>
                </h4>
                <h5>19.99€</h5>
          <p class="card-text">Options réinvente et modernise le classique filet or, marque intemporelle des belles réceptions, avec la ligne “C”, l’alliance de l’or et du platine. Lot de 6 assiettes et tasses.</p>
              </div>
              <div class="unecarte card-footer">

              </div>
            </div>
          </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="css/verre.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a>Ambre</a>
                </h4>
                <h5>9.99€</h5>
  <p class="card-text">Verre à eau ambre 22 cl. Verre à vin ambre 15 cl. Flûte à champagne ambre 15 cl. Assortiment complet.</p>
              </div>
              <div class="unecarte card-footer">

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="css/verre1.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a>Rubis</a>
                </h4>
                <h5>9.99€</h5>
  <p class="card-text">Verre à eau rubis 22 cl. Verre à vin rubis 15 cl. Flûte à champagne rubis 15 cl. Assortiment complet.</p>
              </div>
              <div class="unecarte card-footer">

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="css/verre2.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a>Noir</a>
                </h4>
                <h5>9.99€</h5>
  <p class="card-text">Verre à eau noir 22 cl. Verre à vin noir 15 cl. Flûte à champagne noire 15 cl. Assortiment complet.</p>
              </div>
              <div class="unecarte card-footer">

              </div>
            </div>
          </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="css/couverts.png" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a>Diva</a>
              </h4>
              <h5>9.99€</h5>
<p class="card-text"> Les couverts Diva sont très modernes et épurés. Leur ligne droite et graphique les rend très originaux. Ils s'accorderont à tous vos décors, des plus classiques aux plus modernes. 3 modèles de fourchettes, couteaux et cuillères sont disponibles pour s’adapter à tous vos plats et menus. </p>
            </div>
            <div class="unecarte card-footer">

            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="css/couverts1.png" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a>Ronsard</a>
              </h4>
                <h5>9.99€</h5>
    <p class="card-text"> Les couverts Ronsard sont très modernes et épurés. Leur ligne droite et graphique les rend très originaux. Ils s'accorderont à tous vos décors, des plus classiques aux plus modernes. 3 modèles de fourchettes, couteaux et cuillères sont disponibles pour s’adapter à tous vos plats et menus. </p>
            </div>
            <div class="unecarte card-footer">

            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="css/couverts2.png" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a>Néo Cuivré</a>
              </h4>
              <h5>9.99€</h5>
  <p class="card-text"> Les couverts Néo Cuivré sont très modernes et épurés. Leur ligne droite et graphique les rend très originaux. Ils s'accorderont à tous vos décors, des plus classiques aux plus modernes. 3 modèles de fourchettes, couteaux et cuillères sont disponibles pour s’adapter à tous vos plats et menus. </p>
            </div>
            <div class="unecarte card-footer">

            </div>
          </div>
        </div>

      </div>


    </div>

  </div>


  </div>


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
