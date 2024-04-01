<?php
$titrePage = "Connexion";
$metaDescription ="Description page connexion"; 
?>

<?php 
 require_once (__DIR__ . DIRECTORY_SEPARATOR . "header.php")
?>
<h1>Connexion</h1>

<form method="post" action="" >

    <label for="inscription_pseudo">Pseudo:</label>
        <input type="text" id="inscripton_pseudo" name="pseudo_inscription" minlength="2" maxlength="255"  required>

    <br><br>

    <label for="inscription_email">Email :</label>
        <input type="email" id="inscription_email" name="inscription_email" required>

    <br><br>

    <label for="inscription_mdp">Mot de pass :</label>
        <input type="password" id="inscription_mdp" name="inscription_mdp" minlength="2" maxlength="72" required>


        <br><br>
    <button type="submit">Envoyer</button>
</form>

<?php  // FOOTER 
require_once (__DIR__ . DIRECTORY_SEPARATOR ."footer.php");
?>
