
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

    $idequipe = $_GET["id"];

    $req = $bdd->prepare("SELECT * FROM joueur join equipe on joueur.idequipe = equipe.idequipe where joueur.idequipe = ?");
    $req->execute([$idequipe]);
    $equipe = $req->fetchAll();
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
    <h2 class="text-center mb-4">Joueurs de l'équipe</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover mx-auto" style="width: 80%;">
            <thead class="table-dark text-center">
                <tr>
                    <th>ID Joueur</th>
                    <th>Nom Joueur</th>
                    <th>Nom Équipe</th>
                    
                </tr>
            </thead>
            <tbody class="text-center">
                <?php foreach($equipe as $e): ?>
                <tr>
                    <td><?php echo htmlspecialchars($e["idjoueur"]); ?></td>
                    <td><?php echo htmlspecialchars($e["nomjoueur"]); ?></td>
                    <td><?php echo htmlspecialchars($e["nomequipe"]); ?></td>
                    
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
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