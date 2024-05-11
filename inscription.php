<?php 
$titrePage = "Inscription";
$metaDescription ="Description page inscription "; 
?>

<?php  // HEADER
 require_once (__DIR__ . DIRECTORY_SEPARATOR . "header.php")
?>

<?php 
 require_once ("traitementForm" . DIRECTORY_SEPARATOR ."traitementInscription.php")
?>
 
<?php 
   
    // Configuration pour se connecter à la base de donnée
    $nomDuServeur = "localhost";
    $nomUtilisateur = "root";
    $nomBaseDeDonnees = "projet_php";

    try {
        // Connexion à la base de données
        $pdo = new PDO("mysql:host=$nomDuServeur;dbname=$nomBaseDeDonnees", $nomUtilisateur);
        
        $requete = $pdo->prepare("INSERT INTO t_utilisateur_uti (uti_pseudo, uti_email, uti_motdepasse)
                                  VALUES (:pseudo, :email, :mot_de_passe)");


        $requete->bindParam(':pseudo', $_POST['pseudo_inscription']);
        $requete->bindParam(':email', $_POST['inscription_email']);
        $requete->bindParam(':mot_de_passe', $_POST['inscription_mdp']);
        
        
        $requete->execute();
        
        echo "Utilisateur ajouté avec succès !";
    } catch (PDOException $e) {
        echo "Erreur d'exécution de requête : " . $e->getMessage();
    }
?>


<h1>Inscription</h1>


<form method="POST" action="inscription.php" >

    <label for="inscription_pseudo">Pseudo:</label>
        <input type="text" id="inscripton_pseudo" name="inscription_pseudo" minlength="2" maxlength="255" required>

    <br><br>

    <label for="inscription_email">Email :</label>
        <input type="email" id="inscription_email" name="inscription_email" required>

    <br><br>

    <label for="inscription_mdp">Mot de passe :</label>
        <input type="password" id="inscription_mdp" name="inscription_mdp" minlength="2" maxlength="72" required>

    <br><br>

    <label for="inscription_confirmation_mdp">Confirmation mot de pass :</label>
        <input type="password" id="inscription_confirmation_mdp" name="inscription_confirmation_mdp" minlength="2" maxlength="72" required>

        <br><br>
    <button type="submit">Envoyer</button>
</form>

<?php  // FOOTER 
require_once (__DIR__ . DIRECTORY_SEPARATOR ."footer.php");
?>
