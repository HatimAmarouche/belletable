<?php
session_start();
$pseudo = $_POST["pseudo"];
$password = $_POST["password"];


$con  = mysqli_connect("localhost","root","","belletable");
$req = "select * from user where pseudo = '$pseudo' and password = '$password'";


	$resultat = mysqli_query($con,$req);
	$lig = mysqli_fetch_assoc($resultat);
  if(mysqli_num_rows($resultat) > 0)
  {
		$_SESSION["connexion"]=1;
		if($lig["level"]=="1"){
			$_SESSION["admin"]=1;
		}
 header("location:home.php");

	}
	else {

    header("location:connexion.php?erreur=1");

  }

	?>
