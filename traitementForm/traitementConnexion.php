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
    
    

    // Traitement de l'email
    if (isset($email) && empty($email)) {
        $erreurs[] = "Le champ email est vide.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurs[] = "L'adresse email n'est pas valide.";
    }

    // Traitement du mot de pass

   

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