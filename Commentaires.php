<?php session_start(); ?>
<html>
<head>
	<meta charset="utf-8" />
	<META NAME="Description" CONTENT="Page où vous pouvez nous écrire pour nous dire comment nous améliorer.Ecrivez votre pseudo, écrivez votre message
	et cliquez sur Envoyé ! Votre message me parviendra immédiatement."> 
	<META NAME="Keywords" CONTENT="commentaire, Commentaire, commentaires, Commentaires, Messages, messages, "> 
	<META NAME="Robots" CONTENT="Index, Follow"> 
		<link rel="stylesheet" href="style.css" />
		<title>Messages - Découverte Planète</title>
		<link rel="SHORTCUT ICON" href="icone.ico" />
		<script type="text/javascript" src="./JS/jquery.js"></script>
		<script type="text/javascript" src="./JS/Derouler.js"></script>
		<script type="text/javascript" src="./JS/Alert.js"></script>
</head>

<body>
	<?php include("Header.php"); ?>
	<div class="Contenu">
		<h1>Les commentaires</h1>
		<p>Une remarque, un message, n&apos;h&eacute;sit&eacute; plus et venez nous parler</p>
	</div>
	<?php 
	if(isset($_SESSION['Message']) && $_SESSION['Message'] == "OK") 
	{
		?>
		<div id="alert">
			<div class="Contenu" style="background-color:#228B22;">
				<h2 >Message enregistr&eacute; !</h2>
			</div>
		</div>	
		<?php 
		unset($_SESSION['Message']);
	}
	if(isset( $_SESSION['Message']) && $_SESSION['Message']=="ERREUR") 
	{
		?>
		<div id="alert">
			<div class="Contenu" style="background-color:#FF6347;">
				<h2 >Erreur dans l&apos;enregistrement du message !</h2>
			</div>
		</div>
		<?php 
		unset($_SESSION['Message']);
	}
	?>
	<div class="Contenu">
		<form action="AjouterMessage.php" method="POST">	
			<h2>D&eacute;posez vos messages :</h2>
			Pseudo :<br> <input type="text" name="Pseudo" required ><br>
			Message :<br><textarea name="Message" rows="7" cols="50" required ></textarea><br>
			<input type="submit" value="Envoyer message">			
		</form>				
	</div>	
	<ul id="paragraphe">	
		<div id="ContenuPrincipal">
			<li>
				<h2>Les messages d&eacute;pos&eacute;s :</h2>
				<span style="font-size:10px;">cliquez pour d&eacute;rouler</span>
				<?php 
					include("ConnexionBDD.php");	
					$sql = 'SELECT pseudo,message FROM commentaire' ;
					$reponse = $bdd->query($sql) ;
					while($Donnees = $reponse->fetch()) 
					{
						echo "<p><b>Message de ".$Donnees['pseudo']." :</b><br>";
						echo $Donnees['message']."</p>";
					} 
				?>	
			</li>
		</div>	
	</ul>
	<?php include("Footer.php"); ?>
</body>
</html>