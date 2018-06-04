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
            <li class="nav-item active">
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

	<center>
	<h1> Gestion des utilisateurs </h1> <br />
	<table style="text-align:center" width="80%" border="0" cellspacing="0" bgcolor="silver">
	<tr bgcolor="silver"><th> Nom </th><th> Prénom </th><th> Mail </th><th> Pseudo </th><th> Modifier </th><th> Supprimer </th></tr>
	<?php
	$con  = mysqli_connect("localhost","root","","belletable");
	$req = "select * from user order by nom";

	$resultat = mysqli_query($con,$req);
	if(!$resultat) echo mysqli_error($con);
	$i = 0;
	while($ligne =mysqli_fetch_assoc($resultat)){
		if($i%2==0) echo "<tr bgcolor='#ffffff'>"; else echo "<tr>";
		echo "
					<td>".$ligne["nom"]."</td>
					<td>".$ligne["prenom"]."</td>
					<td>".$ligne["mail"]."</td>
          <td>".$ligne["pseudo"]."</td>
					<td>
						<a href='modif.php?id=".$ligne["id"]."'>
							<img src='modif3.png' width='25' />
						</a>
					</td>
					<td>
						<a href='sup.php?id=".$ligne["id"]."'>
							<img src='x-button.png' width='25' />
						</a>
					</td>
				 </tr>";
				  $i++;
		} ?>
