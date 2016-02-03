<html>
<head>
	<meta charset="utf-8" />
	<META NAME="Description" CONTENT="Faites nous un don pour continuer à developper notre site. Je vous serai très reconnaissant,
		le montant n'est pas important, seul le geste compte"> 
	<META NAME="Keywords" CONTENT="Don, don"> 
	<META NAME="Robots" CONTENT="Index, Follow"> 
		<link rel="stylesheet" href="./style.css" />
		<link rel="SHORTCUT ICON" src="./icone.ico" />
		<title>Don - Découverte planète</title>
</head>

<body>
	<?php include("Header.php"); ?>
	
	<div class="Contenu">
	<center>
		<p>
		Vous souhaitez faire un don pour m'aider &agrave; d&eacute;velopper le site :
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="UB3F8KX2HC4AY">
			<input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donateCC_LG.gif" border="0"
				name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
			<img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
		</form><br>
		Syst&egrave;me s&eacute;curis&eacute; via Paypal.
		</p>
	</center>
    </div>
	<?php //phpinfo();?>
	<?php include("Footer.php"); ?>
</body>
</html>