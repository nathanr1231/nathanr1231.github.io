<?php 
include "connexion2.php";


$req = $bdd->prepare("UPDATE equipe SET nomequipe = ?, classementequipe = ?, imgequipe = ?, vequipe = ?, dequipe = ?, pequipe = ? WHERE idequipe = ?");
$req->execute([$_POST["nomequipe"], $_POST["classementequipe"], $_POST["imgequipe"], $_POST["vequipe"], $_POST["dequipe"], $_POST["pequipe"], $_POST["idequipe"]]);

header("Location:indexAdmin.php");
?>