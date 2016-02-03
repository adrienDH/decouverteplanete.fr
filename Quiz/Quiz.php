<html>
<head>
	<meta charset="utf-8" />
	<META NAME="Description" CONTENT="Venez tester vos connaissance en r&eacute; à notre quiz !"> 
	<META NAME="Keywords" CONTENT="Quiz"> 
	<META NAME="Robots" CONTENT="Index, Follow"> 
       <link rel="stylesheet" href="../style.css" />
	   <link rel="stylesheet" href="./StylePage.css" />
	<title>Quiz - D&eacute;couverte plan&egrave;te</title>
</head>

<body>
	<?php include("./header.php"); ?>
	<div class="Contenu">
		<center>
			<h1>Le quiz du mois</h1>
			<form action="Reponse.php" method="GET">
				Votre pseudo : <input type="text" name="Pseudo"><br><br>
				<div class="Question"><b>Question 1 :</b> Quel est la plan&egrave;te la plus chaude de notre syst&egrave;me solaire ?</div>
				<div class="BoutonRadio">
					<input type="radio" name="question1" value="1">Mercure<br>
					<input type="radio" name="question1" value="2">V&eacute;nus<br><!--REPONSE-->
					<input type="radio" name="question1" value="3">Saturne<br>
					<input type="radio" name="question1" value="4">Neptune<br>
				</div>
				<br><div class="Question"><b>Question 2 :</b> Quel est la temp&eacute;rature moyenne annuelle de Mars ?</div>
				<div class="BoutonRadio">
					<input type="radio" name="question2" value="1">-151&deg;C<br>
					<input type="radio" name="question2" value="2">-89&deg;C<br>
					<input type="radio" name="question2" value="3">-65&deg;C<br><!--REPONSE-->
					<input type="radio" name="question2" value="4">43&deg;C<br>
				</div>
				<br><div class="Question"><b>Question 3 :</b> Quel est la distance minimal entre la Terre et Jupiter ?</div>
				<div class="BoutonRadio">
					<input type="radio" name="question3" value="1">385 000 000 de km<br>
					<input type="radio" name="question3" value="2">1 000 000 000 de km<br>
					<input type="radio" name="question3" value="3">1,588 milliards de km<br>
					<input type="radio" name="question3" value="4">0,588 milliard de km<br><!--REPONSE-->
				</div>
				<br><div class="Question"><b>Question 4 :</b> Sur quel plan&egrave;te est le rover Curiosity ?</div>
				<div class="BoutonRadio">
					<input type="radio" name="question4" value="1">V&eacute;nus<br>
					<input type="radio" name="question4" value="2">Mercure<br>
					<input type="radio" name="question4" value="3">la Terre<br>
					<input type="radio" name="question4" value="4">Mars<br><!--REPONSE-->
				</div>
				<br><div class="Question"><b>Question 5 :</b> Quel est la temp&eacute;rature la plus basse du syst&egrave;me solaire ?</div>
				<div class="BoutonRadio">
					<input type="radio" name="question5" value="1">-220&deg;C<br><!--REPONSE-->
					<input type="radio" name="question5" value="2">-285&deg;C<br>
					<input type="radio" name="question5" value="3">0&deg;C<br>
					<input type="radio" name="question5" value="4">-10&deg;C<br>
				</div>
			<br><br><input type="submit" value="Valider">		
			</form>
		</center>
	</div>
	<?php include("./footer.php"); ?>
</body>
</html>