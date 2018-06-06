<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Belle Table</title>


    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link href="css/style4.css" rel="stylesheet">

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
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>

          <li class="button1 nav-item active">
          <a class="btn btn-primary btn-xl" href="inscription.php">Inscription</a>
          </li>
          <li class="button1 nav-item">
          <a class="btn btn-primary btn-xl" href="connexion.php">Connexion</a>
          </li>

          </ul>
        </div>
      </div>
    </nav>


	<center>
    <h1>NOUVEAU CLIENT sur <i> Belle Table </i> ? </h1>
    <p>  Avec votre adresse email, créez votre compte en quelques </br>
       instants afin de suivre vos commandes, profiter d'offres exclusives, </br>
        de tendances en avant-première. </p>

	<h2> Inscrivez-vous ! </h2>
	<hr width="40%" color="black">

	<form action="ajout.php" method="post">
  <label> Nom : </label> <input type="text" name="nom" id="nom" required> <br />
	<label> Prénom : </label> <input type="text" name="prenom" id="prenom" required> <br />
  <label> Mail : </label> <input type="email" name="mail" id="mail"/ required> <br />
  <label> Pseudo : </label> <input type="text" name="pseudo" id="pseudo" required> <br />
  <label> Password : </label> <input type="password" name="password" id="password" required> <br />
    <a href="popup.html"  onclick="open('popup.html', 'Popup', 'scrollbars=1,resizable=1,height=560,width=770'); return false;" >Conditions générales d'utilisation</a><br />
  <input class="btn btn-primary" type="submit" value="Envoyez"> <br /> <br />


  <?php
  if(isset($_GET["erreur"]))
  { ?>

    <div id="DivClignotante" style="visibility:visible;">Ce pseudo existe déjà</div>
      <p>
          <script type="text/javascript">
          var clignotement = function(){
          if (document.getElementById('DivClignotante').style.visibility=='visible')
            {
              document.getElementById('DivClignotante').style.visibility='hidden';
            }
          else
            {
              document.getElementById('DivClignotante').style.visibility='visible';
            }
};

        periode = setInterval(clignotement, 100);
        </script></p>

  <?php } ?>

  <br />

</form>


</center>

</body>

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
        <strong>Responsable publication</strong> : Amarouche Hatim – htm_tremblay@hotmail.fr<br />



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

  </html>
