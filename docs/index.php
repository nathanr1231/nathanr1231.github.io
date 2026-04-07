<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>site</title>

    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
</head>

 
<body class="bg-secondary">

<?php

include "connexion2.php";

$req = $bdd->prepare("SELECT * FROM equipe");
$req->execute();
$tabs = $req->fetchAll();

?>
    
 
   
    <header class="bg-secondary">
        
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php">NHL Infos</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="Contact.html">Contact</a>
                  <a class="nav-link" href="#">Features</a>
                  <a class="nav-link" href="connexionAdmin.php">Se connecter</a>
                  <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </div>
              </div>
            </div>
          </nav>

          <img src="NHL.jpg" class="img-fluid" alt="NHL">
        
    </header>


    <div class="container mt-4">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
        <?php foreach($tabs as $tab): ?>
            <div class="col">
                <div class="card h-100">
                    <img src="images/<?php echo $tab["imgequipe"]; ?>" class="card-img-top" alt="Couverture" height="300">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $tab["nomequipe"]; ?></h5>
                        <p class="card-text">Classement: <?php echo $tab["classementequipe"]; ?></p>
                        <p class="card-text">Victoire: <?php echo $tab["vequipe"]; ?></p>
                        <p class="card-text">Defaite: <?php echo $tab["dequipe"]; ?></p>
                        <p class="card-text">Points: <?php echo $tab["pequipe"]; ?></p>
                        <a href="joueur.php?id=<?php echo $tab['idequipe']; ?>" class="btn btn-sm btn-primary">Joueur</a>
                        
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    
</div>


 
   
 
   

    
   
 
   
 
    <!-- PIED DE PAGE -->
    <footer>
        <p>2026 - Mon site</p>
        <p>
            <a href="#">Contact</a> |
            <a href="#">Infos légales</a>
        </p>
    </footer>
 
</body>
</html>