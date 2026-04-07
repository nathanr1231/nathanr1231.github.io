<?php
session_start();
require 'connexion2.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM admins WHERE username = ?";
    $requete = $bdd->prepare($sql);
    $requete->execute([$username]);
    $admin = $requete->fetch(PDO::FETCH_ASSOC);

    if ($admin && password_verify($password, $admin['password'])) {
        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['admin_username'] = $admin['username'];

        header("Location: indexAdmin.php");
        exit;
    } else {
        $_SESSION['erreur'] = "Identifiant ou mot de passe incorrect";
        header("Location: connexionAdmin.php");
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}
?>