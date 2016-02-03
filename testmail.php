<?php
	$nombre = 123456 ;
	$pseudo = "Adeline" ;
	$mail = "adrien.dhermy@gmail.com";
	//$mail = "adelinedauria@hotmail.fr" ;
	//$mail = "adrien3763@hotmail.fr" ;

	$sujet = "Mot de passe";
	$message = "Bonjour ".$pseudo.",\nVoici votre nous mot de passe : ".$nombre."\nVous pouvez vous connecter et changer votre mot de passe dans l'onglet Profil.\nMerci de votre confiance\n\nCeci est un mail automatique.\n  decouverteplanete.fr";
	$destinataire = $mail;
     
				$headers .= 'From: decouverteplanete.fr '. "\n";
				$headers .='Reply-To: adrien.dhermy@decouverteplanete.fr'."\n";
                $headers .='Content-Type: text/plain; charset="iso-8859-1"'."\n";
                $headers .='Content-Transfer-Encoding: 8bit';
               
	if( mail($destinataire,$sujet,$message, $headers) )
	{
			echo "L'email a bien été envoyé.";
	}
	else
	{
			echo "Une erreur c'est produite lors de l'envois de l'email.";
	}
?>