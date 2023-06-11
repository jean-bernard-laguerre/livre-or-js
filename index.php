<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Module de connexion - Inscription</title>
</head>
<body>
    <header>
        <nav>
            <div>
                <a href="index.php">Accueil</a>
                <a href="livre-or.php">Livre d'Or</a>
            </div>
            <div>
                <?php if( empty($_SESSION) ) : ?>
                    <a href="login.php">Connexion</a>
                
                <?php else : ?>
                    <a href="profil.php">Profil</a>
                    <a href="deconnexion.php">Déconnexion</a>
                <?php endif ?>
            </div>
        </nav>
    </header>
    <main>
        <?php if(!empty($_SESSION)) : ?>
            <div class="container">
                <h2>
                    <?php {echo "Bienvenue " . $_SESSION["login"] . ".";}?>
                </h2>
            </div>
        <?php endif ?>
    </main>
    <footer>
        <span>Laguerre Jean-Bernard</span>
        <a href="https://github.com/jean-bernard-laguerre/module-connexion" >
            <img src="./style/images/Github.png" alt="logo github" />
        </a>   
    </footer>
</body>
</html>