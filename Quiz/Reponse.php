<?php
session_start() ;
$Note = 0
?>
<html>
<head>
	<meta charset="utf-8" />
	<META NAME="Description" CONTENT="je tiens à jours cette page quand j'ajoute des pages."> 
	<META NAME="Keywords" CONTENT="actualité, développement, avancement, site"> 
	<META NAME="Robots" CONTENT="Index, Follow"> 
       <link rel="stylesheet" href="../style.css" />
	   <link rel="stylesheet" href="./style.css" />
	<title>Quiz - D&eacute;couverte plan&egrave;te</title>
</head>

<body>
	<?php include("./header.php"); ?>
	<div class="Contenu">
		<center>
			<h1>Le quiz du mois</h1>
				<b>Question 1 :</b> Quel est la plan&egrave;te la plus chaude de notre syst&egrave;me solaire ?<br>
					<?php
					if(isset($_GET['question1']))
					{
						if($_GET['question1'] == 2) 
						{
							$Note++ ;
							echo "<IMG SRC=\"../Images/vrai.jpg\" width=\"150px\" height=\"100px\">" ;
						} else	echo "<IMG SRC=\"../Images/faux.jpg\" width=\"150px\" height=\"100px\">" ;
						echo "<br>r&eacute;ponse : V&eacute;nus";
					}
					?>
					<br><br><b>Question 2 :</b> Quel est la temp&eacute;rature moyenne annuelle de Mars ?<br>
					<?php
						if(isset($_GET['question2']))
						{
							if($_GET['question2'] == 3) 
							{
								$Note++ ;
								echo "<IMG SRC=\"../Images/vrai.jpg\" width=\"150px\" height=\"100px\">" ;
							}else	echo "<IMG SRC=\"../Images/faux.jpg\" width=\"150px\" height=\"100px\">" ;
							echo "<br>r&eacute;ponse : -65&deg;C";
						}
					?>
					<br><br><b>Question 3 :</b> Quel est la distance minimal entre la Terre et Jupiter ?<br>
					<?php
						if(isset($_GET['question3']))
						{
							if($_GET['question3'] == 4) 
							{
								$Note++ ;
								echo "<IMG SRC=\"../Images/vrai.jpg\" width=\"150px\" height=\"100px\">" ;
							}else echo "<IMG SRC=\"../Images/faux.jpg\" width=\"150px\" height=\"100px\">" ;
							echo "<br>r&eacute;ponse : 0.588 milliard de km";
						}
					?>
					<br><br><b>Question 4 :</b> Sur quel plan&egrave;te est le rover Curiosity ?<br>
					<?php
						if(isset($_GET['question4']))
						{
							if($_GET['question4'] == 4) 
							{
								$Note++ ;
								echo "<IMG SRC=\"../Images/vrai.jpg\" width=\"150px\" height=\"100px\">" ;
							}else echo "<IMG SRC=\"../Images/faux.jpg\" width=\"150px\" height=\"100px\">" ;
							echo "<br>r&eacute;ponse : Mars";
						}
					?>
					<br><br><b>Question 5 :</b> Quel est la temp&eacute;rature la plus basse du syst&egrave;me solaire ?<br>
					<?php
						if(isset($_GET['question5']))
						{
							if($_GET['question5'] == 1) 
							{
								$Note++ ;
								echo "<IMG SRC=\"../Images/vrai.jpg\" width=\"150px\" height=\"100px\">" ;
							}else echo "<IMG SRC=\"../Images/faux.jpg\" width=\"150px\" height=\"100px\">" ;
							echo "<br>r&eacute;ponse : -220&deg;C<br><br>";
						}
						echo "<strong>Note final ".$Note."/5</strong>" ;
						
						$Note = $Note."/5" ;
						$Pseudo = $_GET['Pseudo'] ;
						$IpVisiteur = $_SERVER["REMOTE_ADDR"] ;
						$Date = date("d-m-Y");  
						
						include("../ConnexionBDD.php");
						$query = "INSERT INTO `Quiz`(`Pseudo`, `IP`,`Note`, `Date`) VALUES ('".$Pseudo."','".$IpVisiteur."','".$Note."','".$Date."')" ;
						$bdd->query($query) ;
					?>	
		</center>
	</div>
	<?php include("./footer.php"); ?>
</body>
</html>