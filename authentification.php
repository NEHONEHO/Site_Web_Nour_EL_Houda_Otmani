<?php 
include ('connexion.php');

if(isset($_POST['username-exist']) and isset($_POST['password-log']))
{
	if($_POST['username-exist']=='admin' and $_POST['password-log']=='admin')
	         header( "location: produit.html");
	else
	{
	
		echo "<center> Mot de passe incorrect</center>";
	}
}
?>