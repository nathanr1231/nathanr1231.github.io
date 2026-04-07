<?php

$prenom = $_POST["prénom"];
$nom = $_POST["nom"];
$message = $_POST["message"];

echo"bonjour ", $prenom ," ", $nom, " le message a envoyé est il correct ?", "<br>";
echo"<br>";
echo $message;




?>