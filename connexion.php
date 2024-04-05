<?php
$titrePage = "Connexion";
$metaDescription ="Description page connexion"; 
?>


<?php 
 require_once (__DIR__ . DIRECTORY_SEPARATOR . "header.php")
?>

<?php

// Cette options passée à 1 permet au serveur de rejeter un identifiant de session qui n'aurait pas été initialisé par celui-ci.
ini_set('session.use_strict_mode', 1);

// Empêcher la récupération du cookie de session via l'URL (1 est sa valeur par défaut, mais on est jamais trop prudent).
ini_set('session.use_only_cookies', 1);

// Configuration sécurisée de la variable de session avant de démarrer celle-ci.
session_set_cookie_params([
    'path' => '/',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'lax'
]);

// Démarrer la gestion des variables de session.
session_start();

$_SESSION["connexion_email"];
$_SESSION["connexion_mdp"];

function connecter_utilisateur(){};

function est_connecte(){};

function deconnecter_utilisateur(){};

?>


<h1>Connexion</h1>

<form method="post" action="" >


    <label for="connexion_email">Email :</label>
        <input type="email" id="connexion_email" name="inscription_email" required>

    <br><br>

    <label for="connexion_mdp">Mot de passe :</label>
        <input type="password" id="connexion_mdp" name="inscription_mdp" minlength="2" maxlength="72" required>


        <br><br>
    <button type="submit">Envoyer</button>
</form>

<?php  // FOOTER 
require_once (__DIR__ . DIRECTORY_SEPARATOR ."footer.php");
?>
