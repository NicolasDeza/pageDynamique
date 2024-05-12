<?php 
// TRAITEMENT INSCRIPTION

// Verification si la methode d'envoi est bien " POST "
if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST)) {
     
    // Création du tableau d'erreurs
    $erreurs = [];

    $pseudo = htmlentities($_POST["inscription_pseudo"]);
    $email = htmlentities($_POST["inscription_email"]);
    $mdp = htmlentities($_POST["inscription_mdp"]);
    $confirmationMdp = htmlentities($_POST["inscription_confirmation_mdp"]);

    //! TEST RECUPERATION DONNEES A SUPPRIMER POUR LA BONNE VERSION 
    echo "<p>" . $pseudo . " " . $email . " " . $mdp . " " . $confirmationMdp . "</p>";
    // !TEST RECUPERATION DONNES A SUPPRIMER POUR LA BONNE VERSION
    
    // Traitement du pseudo
    if (isset($pseudo) && empty($pseudo)) {
        $erreurs[] = "Le champ pseudo est vide.";
    } elseif (strlen($pseudo) < 2 || strlen($pseudo) > 255) {
        $erreurs[] = "La longueur du pseudo doit être comprise entre 2 et 255 caractères.";
    }

    // Traitement de l'email
    if (isset($email) && empty($email)) {
        $erreurs[] = "Le champ email est vide.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurs[] = "L'adresse email n'est pas valide.";
    }

    // Traitement du mot de passe
    if (isset($mdp) && empty($mdp)) {
        $erreurs[] = "Le champ mot de passe est invalide";
    } elseif (strlen($mdp) < 6) {
        $erreurs[] = "Le mot de passe n'est pas assez long";
    } elseif (strlen($mdp) > 255) {
        $erreurs[] = "Le mot de passe est trop long";

        // Expression régulière pour obliger les caractères spéciaux
    } elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/", $mdp)) {
        $erreurs[] = "Le mot de passe doit contenir au moins une lettre majuscule, une lettre minuscule, un chiffre et un caractère spécial.";
    }

    // Traitement confirmation du mot de passe
    if (isset($confirmationMdp) && empty($confirmationMdp)) {
        $erreurs[] = "Le champ confirmation du mot de passe est invalide.";
    } elseif ($mdp !== $confirmationMdp) {
        $erreurs[] = "Le mot de passe ne correspond pas";
    } 

    // Afficher les messages d'erreurs 
    if (!empty($erreurs)) {
        foreach ($erreurs as $erreur) {
            echo "<p>" . $erreur . "</p>";
        }
    } else {
        echo "<p>" . "Inscription réussie !" . "</p>";
    }
}   
?>