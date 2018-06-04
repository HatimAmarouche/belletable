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
    <link href="css/style4.css" rel="stylesheet">

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

	<form action="ajout.php" method="post"  onsubmit="window.open('popup.html','popup','width=700,height=400,left=200,top=200,scrollbars=1')">
  <label> Nom : </label> <input type="text" name="nom" id="nom" required> <br />
	<label> Prénom : </label> <input type="text" name="prenom" id="prenom" required> <br />
  <label> Mail : </label> <input type="email" name="mail" id="mail"/ required> <br />
  <label> Pseudo : </label> <input type="text" name="pseudo" id="pseudo" required> <br />
  <label> Password : </label> <input type="password" name="password" id="password" required> <br /> <br />
  <input class="btn btn-primary" type="submit" value="Envoyez">




  <br /><br />

</form>


</center>

</body>
  </html>
