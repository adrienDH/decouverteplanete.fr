<?php
	try
	{
		$bdd = new PDO('mysql:host=mysql51-125.perso;dbname=decouverd12','decouverd12','adrien171192');
	}
	catch(Exception $e)
	{
		echo $e->getCode() . $e->getMessage( );
	}
?>