<html>
<head>
	<META NAME="Author" LANG="fr" CONTENT="Adrien DHERMY"> 
	<META NAME="Reply-to" CONTENT="adrien.dhermy@gmail.com (Adrien DHERMY)">
	<META NAME="Description" CONTENT="Site sur l'Astronomie. On y trouve des descriptions sur les planètes de notre système solaire, mais aussi des informations
		sur les missions, les sondes et les rovers."> 
	<META NAME="Keywords" CONTENT="astronomie, Astronomie, planète, Planète, Système solaire, système solaire,Venus,Mars,Jupiter
		Neptune,Uranus,Mercure"> 
	<META NAME="Robots" CONTENT="Index, Follow"> 
	<meta charset="utf-8" />
	<link rel="stylesheet" href="./style.css" />
	<link rel="stylesheet" href="./NomPlaneteCSS/StyleVenus.css" />
	<link rel="stylesheet" href="./NomPlaneteCSS/StyleMars.css" />
	<link rel="stylesheet" href="./NomPlaneteCSS/StyleMercure.css" />
	<link rel="stylesheet" href="./NomPlaneteCSS/StyleJupiter.css" />
	<link rel="stylesheet" href="./NomPlaneteCSS/StyleSaturne.css" />
	<link rel="stylesheet" href="./NomPlaneteCSS/StyleNeptune.css" />
	<link rel="stylesheet" href="./NomPlaneteCSS/StyleUranus.css" />
	<link rel="stylesheet" href="./NomPlaneteCSS/StyleTerre.css" />
	
	
	<link rel="stylesheet/less" type="text/css" href="style.less">
	<script src="./JS/less.js" type="text/javascript"></script>
	
	<!--<link rel="SHORTCUT ICON" src="./icone.ico" />-->
	<link rel="SHORTCUT icon" type="image/jpg" href="./Images/kepler.jpg" />
	<title>Accueil - Découverte planète</title>
</head>

<body>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-49756115-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

	<?php include("Header.php"); ?>
	<center >
	<div class="fb-like-box" data-href="https://www.facebook.com/DecouvertePlanete" data-colorscheme="light" 
					data-show-faces="false" data-header="false" data-stream="false" data-show-border="false"></div>
				</div>	
	</center>
	<div class="Contenu">	
		<h1>Bonjour et bienvenue sur notre site "Découverte Planète"</h1>
		<p>
		Nous allons partir à la découverte de notre système solaire.
		Nous allons répertorier toutes les planètes de notre système solaire. Pour chaque planète,
		nous parlerons de leurs satellites naturels, des missions qui y ont été envoyés (sondes et rovers).
		Nous ferons aussi une description détaillée de chaque planète sur leur page d'accueil, avec notamment,
		leur climat, leur géologie et quelques chiffres associés. Le site étant en perpétuelle évolution,
		les planètes seront ajoutées une à une au fur et à mesure du temps. Vous pouvez suivre cette évolution dans la page Actualités.
		Je vous souhaite une bonne visite !
		</p>
		
	</div>
	<div class="Contenu">
	<center>
        <h2>Les plan&egrave;tes </h2>   
		<h4>cliquez sur la plan&egrave;te qui vous int&eacute;resse</h4>
		<p>
			<img src="Images/SS.jpg" usemap="#Map"> 
			
				<map name="Map" >
					<?php include("AreaNomPlanete.php"); ?>
				</map>	
		</p>
	</center>
    </div>
	<?php
		include("Footer.php"); 
		include("LienJSNomPlanete.php");
	?>
</body>
</html>