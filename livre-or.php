<?php
    session_start();

    include "database.php";

    $messages = getMessages();
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
        <div class="livre-container">
            <?php if (!empty($_SESSION)) : ?>
                <h2><a href="commentaire.php">Ajouter un commentaire</a></h2>
            <?php endif ?>
            <?php
                foreach($messages as $message){
                    echo "<div class='message-container'>";
                    echo "<p> Posté le " . $message["date"] . " par " . $message["login"] . ":</p>";
                    echo "<p>" . $message["content"] . "</p>";
                    echo "</div>";
                }
            ?>
        </div>
    </main>
    <footer>
        <span>Laguerre Jean-Bernard</span>
        <a href="https://github.com/jean-bernard-laguerre/livre-or-js" >
            <img src="./style/images/Github.png" alt="logo github" />
        </a>   
    </footer>
</body>
</html>