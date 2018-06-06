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

<body>
  <center>
    <h1> Modifiez les informations de vos utilisateurs </h1>
    	<hr width="30%" color="red" />
    	<form action="modifier.php" method="post">
    	Modifiez le nom : <input type="text" name="nom" /><br /><br />
    	Modifiez le prénom : <input type="text" name="prenom" /><br /><br />
      Modifiez l'adresse mail : <input type="mail" name="mail" /><br /><br />
      Modifiez le pseudo : <input type="text" name="pseudo" /><br /><br />
      Modifiez le mot de passe : <input type="password" name="password" /> <br /> <br />


	  <button type="submit" class="btn btn-primary">Envoyez</button> <br/> <br />
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

  <center>

</body>
