<?php 
// TRAITEMENT INSCRIPTION

if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST)) {
     
    // Création du tableau d'erreurs
    $erreurs = [];

    $pseudo = htmlentities($_POST["inscription_pseudo"]);
    $email = htmlentities($_POST["inscription_email"]);
    $mdp = htmlentities($_POST["inscription_mdp"]);
    $confirmationMdp = htmlentities($_POST["inscription_confirmation_mdp"]);

    // TEST A SUPPRIMER POUR LA BONNE VERSION
    echo "<p>" . $pseudo . " " . $email . " " . $mdp . " " . $confirmationMdp . "</p>";
    // TEST
    
    // Traitement du pseudo
    if (isset($pseudo) && empty($pseudo)) {
        $erreurs[] = "Le champ pseudo est vide.";
    } elseif (strlen($pseudo) < 6 || strlen($pseudo) > 255) {
        $erreurs[] = "La longueur du pseudo doit être comprise entre 2 et 255 caractères.";
    }

    // Traitement de l'email
    if (isset($email) && empty($email)) {
        $erreurs[] = "Le champ email est vide.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurs[] = "L'adresse email n'est pas valide.";
    }




    // Afficher les messages d'erreurs 
    if (!empty($erreurs)) {
        foreach ($erreurs as $erreur) {
            echo "<p>" . $erreur . "</p>";
        }
    }

}   
?>