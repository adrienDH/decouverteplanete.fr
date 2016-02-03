<?php
	$nombre = 123456 ;
	$pseudo = "Adeline" ;
	//$mail = "adrien.dhermy@gmail.com";
	//$mail = "adelinedauria@hotmail.fr" ;
	$mail = "adrien3763@hotmail.fr" ;

	$sujet = "Mot de passe";
	$message = "Bonjour ".$pseudo.",<br />Voici votre nous mot de passe : ".$nombre."<br />
	Vous pouvez dorénavant vous connecter et changer votre mot de passe dans l'onglet Profil.<br />Merci de votre confiance<br />Découverte planète";
	$destinataire = $mail;
	$headers = "From: \"decouverteplanete.fr\"<adrien.dhermy@decouverteplanete.fr>\n";
	$headers .= "Reply-To: adrien.dhermy@decouverteplanete.fr\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	if(mail($destinataire,utf8_decode($sujet),utf8_decode($message),$headers))
	{
			echo "L'email a bien été envoyé.";
	}
	else
	{
			echo "Une erreur c'est produite lors de l'envois de l'email.";
	}
?>