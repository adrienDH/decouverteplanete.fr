<?php 
	session_start();
	if(isset($_POST['Pseudo']) && isset($_POST['Message']))
	{
		$Pseudo = htmlentities($_POST['Pseudo']);
		$Message = htmlentities($_POST['Message']);
		$Message = nl2br($Message);
		
		include("./ConnexionBDD.php");	
		$sql = "INSERT INTO commentaire(pseudo,message) VALUES('".$Pseudo."','".$Message."')" ;
		if($bdd->query($sql))
			echo "ok" ;
		else echo "erreur" ; 
		
		$_SESSION['Message'] = "OK" ;
		header('location:../Commentaires.php');
	}
	else
	{
		$_SESSION['Message'] = "ERREUR" ;
		header('location:../Commentaires.php');
	}
?>