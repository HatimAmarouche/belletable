<?php
$id = $_GET["id"];

$con  = mysqli_connect("localhost","root","","belletable");
	$req = "delete from user where id = '$id'";

	$resultat = mysqli_query($con,$req);

header("location:admin.php");




?>
