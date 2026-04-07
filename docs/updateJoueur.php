<?php 
include "connexion2.php";


$req = $bdd->prepare("UPDATE joueur SET nomjoueur = ?, idequipe = ? WHERE idjoueur = ?");
$req->execute([$_POST["nomjoueur"], $_POST["idequipe"], $_POST["idjoueur"]]);

header("Location:indexAdmin.php");
?>