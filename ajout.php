<?php
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$mail = $_POST["mail"];
$pseudo = $_POST["pseudo"];
$password = $_POST["password"];


$con  = mysqli_connect("localhost","root","","belletable");

$req = "insert into user
			values(null,'$nom','$prenom','$mail','$pseudo','$password',0)";
	echo $req;
$resultat = mysqli_query($con,$req);
echo mysqli_error($con);

$donnees = mysqli_fetch_assoc($resultat);

if($donnees["pseudo"]==$_POST["pseudo"]) {

	header("location:inscription.php?erreur=1");
}
else {
header("location:home.php");


}



?>
