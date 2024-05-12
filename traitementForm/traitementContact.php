<?php 
// TRAITEMENT INSCRIPTION

// Verification si la methode d'envoi est bien " POST "
if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST)) {
     
    // Création du tableau d'erreurs
    $erreurs = [];
     
    // Recuperation des champs du formulaire
    $nom = htmlentities($_POST["nom"]);
    $prenom = htmlentities($_POST["prenom"]);
    $email = htmlentities($_POST["email"]);
    $message = htmlentities($_POST["message"]);

    //! TEST RECUPERATION DONNEES A SUPPRIMER POUR LA BONNE VERSION 
    echo "<p>" . $nom . " " . $prenom . " " . $email . " " . $message . "</p>";
    // !TEST RECUPERATION DONNES A SUPPRIMER POUR LA BONNE VERSION
    
    // Traitement du nom
    if (isset($nom) && empty($nom)) {
        $erreurs[] = "Le champ pseudo est vide.";
    } elseif (strlen($nom) < 2 || strlen($nom) > 255) {
        $erreurs[] = "La longueur du nom doit être comprise entre 2 et 255 caractères.";
    }
    // Traitement du prenom
    if (isset($prenom) && empty($prenom)) {
        $erreurs[] = "Le champ pseudo est vide.";
    } elseif (strlen($prenom) < 2 || strlen($prenom) > 255) {
        $erreurs[] = "La longueur du nom doit être comprise entre 2 et 255 caractères.";
    }

    // Traitement de l'email
    if (isset($email) && empty($email)) {
        $erreurs[] = "Le champ email est vide.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurs[] = "L'adresse email n'est pas valide.";
    }

    // Traitement du message
    if (isset($message) && empty($message)) {
        $erreurs[] = "Le contenu du message est vide";
    } elseif (strlen($message) < 10 || strlen($message) > 3000) {
        $erreurs[] = "Le message ne peut contenir qu'entre 10 et 3000 caractères";
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