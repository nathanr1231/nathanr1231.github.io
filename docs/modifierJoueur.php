<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>site</title>

    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
</head>



<?php
include "connexion2.php";

$idjoueur=$_GET["id"];

$req = $bdd->prepare("SELECT * FROM joueur WHERE idjoueur = ?");
$req->execute([$idjoueur]);
$joueur = $req->fetch();

$req2 = $bdd->prepare("SELECT * FROM equipe");
$req2->execute();
$equipe = $req2->fetchAll();

?>

 
<body class="bg-secondary">


 
   
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


    <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="width: 400px;">
        <h3 class="card-title text-center mb-4">Modifier Joueur</h3>

        <form action="updateJoueur.php" method="post">
            <div class="mb-3">
                <label for="nomjoueur" class="form-label">Nom joueur</label>
                <input type="text" class="form-control" id="nomjoueur" name="nomjoueur" value="<?php echo htmlspecialchars($joueur['nomjoueur']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="idequipe" class="form-label">Nom équipe</label>
                <select name="idequipe" id="idequipe" class="form-select" required>
                    <?php foreach($equipe as $e): ?>
                        <option value="<?php echo $e['idequipe']; ?>" <?php if($e['idequipe'] == $joueur['idequipe']) echo 'selected'; ?>>
                            <?php echo htmlspecialchars($e['nomequipe']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <input type="hidden" name="idjoueur" value="<?php echo $joueur['idjoueur']; ?>">

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Envoyer</button>
                <button type="reset" class="btn btn-secondary">Réinitialiser</button>
            </div>
        </form>
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