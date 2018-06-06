<?php
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$mail = $_POST["mail"];
$pseudo = $_POST["pseudo"];
$password = $_POST["password"];


$con  = mysqli_connect("localhost","root","","belletable");
$count = "select * from user where pseudo = '$pseudo'";
$resultat =  mysqli_query( $con, $count ) ;

$row = mysqli_fetch_array($resultat, MYSQLI_ASSOC) ;
if ( mysqli_num_rows($resultat) != 0 )
     {
     header("location:modif.php?erreur=1");
     }

else {
	$req = "insert into user
	values(null,'$nom','$prenom','$mail','$pseudo','$password',0)";
	echo $req;
	$resultat = mysqli_query($con,$req);
	echo mysqli_error($con);
	header("location:admin.php");
}

?>
