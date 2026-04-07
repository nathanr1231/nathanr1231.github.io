<?php
try
{
 
	$bdd = new PDO('mysql:host=localhost;dbname=nhl;charset=utf8',
	"lecteur",
	"nathan1234@");
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}









?>