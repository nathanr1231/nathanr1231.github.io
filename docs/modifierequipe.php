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

$idequipe=$_GET["id"];

$req2 = $bdd->prepare("SELECT * FROM equipe");
$req2->execute();
$equipe = $req2->fetch();

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
        <h3 class="card-title text-center mb-4">Modifier stats equipe</h3>

        <form action="updateEquipe.php" method="post">
            <div class="mb-3">
                <label for="nomequipe" class="form-label">Nom equipe</label>
                <input type="text" class="form-control" name="nomequipe" value="<?php echo htmlspecialchars($equipe['nomequipe']); ?>" >
            </div>


            <div class="mb-3">
                <label for="vequipe" class="form-label">Victoire equipe</label>
                <input type="number" class="form-control" min="0" name="vequipe" value="<?php echo htmlspecialchars($equipe['vequipe']); ?>" >
            </div>

            <div class="mb-3">
                <label for="dequipe" class="form-label">Defaite equipe</label>
                <input type="number" class="form-control" min="0" name="dequipe" value="<?php echo htmlspecialchars($equipe['dequipe']); ?>" >
            </div>

            <div class="mb-3">
                <label for="pequipe" class="form-label">Point de l'equipe</label>
                <input type="number" class="form-control" min="0" name="pequipe" value="<?php echo htmlspecialchars($equipe['pequipe']); ?>" >
            </div>
        

            <input type="hidden" name="idequipe" value="<?php echo $equipe['idequipe']; ?>">
            <input type="hidden" name="imgequipe" value="<?php echo $equipe["imgequipe"]; ?>">
            <input type="hidden" name="classementequipe" value="<?php echo $equipe["classementequipe"]; ?>">

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