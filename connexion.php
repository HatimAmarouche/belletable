<?php
session_start();

?>

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

          <li class="button1 nav-item">
          <a class="btn btn-primary btn-xl" href="inscription.php">Inscription</a>
          </li>
          <li class="button1 nav-item active">
          <a class="btn btn-primary btn-xl" href="connexion.php">Connexion</a>
          </li>

          </ul>
        </div>
      </div>
    </nav>

    <html>
        <head>
              <meta charset="utf-8"/>
              <TITLE> Formulaire
              </title>

        </head>
      <center>
        <h1> Page de Connexion </h1>
        <hr width="30%" color="black" />

        <form action="verifconnexion.php" method="post">
        <label for="pseudo"> Entrez votre pseudo :</label> <input type="text" name="pseudo" /> <br />
        <label for="mdp"> Entrez votre mot de passe :</label> <input type="password" name="password" /> <br /><br />

          <input type="submit" value="Connectez-vous !" />
        <br /><br />
        </form>
        <?php
  if(isset($_GET["erreur"]))
  { ?>
    <div id="DivClignotante" style="visibility:visible;">Connexion refusée</div>
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
<?php  } ?>
        <hr width="30%" color="black" />



</body>

</html>
