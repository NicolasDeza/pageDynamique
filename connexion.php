<?php
$titrePage = "Connexion";
$metaDescription ="Description page connexion"; 
?>

          
<?php    // HEADER
 require_once (__DIR__ . DIRECTORY_SEPARATOR . "header.php")
?>


<?php  // Importer traitement du formulaire
require_once(__DIR__ . DIRECTORY_SEPARATOR . "traitementForm" . DIRECTORY_SEPARATOR . "traitementConnexion.php");
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
