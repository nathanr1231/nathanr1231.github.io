
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>site</title>

    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
</head>

 
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
    <div class="card shadow p-4" style="width: 350px;">
        <h3 class="card-title text-center mb-4">Connexion Admin</h3>

        <?php
            if (isset($_SESSION['erreur'])) {
                echo "<p style='color:red;'>" . htmlspecialchars($_SESSION['erreur']) . "</p>";
                unset($_SESSION['erreur']);
            }
            ?>

            <form action="traitement_login.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Identifiant</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Entrez votre identifiant" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Se connecter</button>
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