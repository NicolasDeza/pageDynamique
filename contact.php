<?php
if ($_SERVER["REQUEST_METHOD"] === "POST")
{
    if (empty($POST["prenom"])) {
        echo "Le champs prénom est requis";
    }
}

// Valeur spécifique de la page
$titrePage ="Contact";
$metaDescription ="Description page contact"; 

?>

<?php
require_once (__DIR__ . DIRECTORY_SEPARATOR . "header.php") 
?>


<h1>Contact</h1>

<form method="post" action="" >
    <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" minlength="2" maxlength="255"  required>
    <br><br>
    <label for="prenom">Prénom :<label>
        <input type="text" id="prenom" name="prenom" minlength="2" maxlength="255">
    <br><br>
    <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
    <br><br>
    <label for="message">Message</label>
        <input type="text" id="message" name="message" minlength="10" maxlength="3000" required>
    <br><br>
    <button type="submit">Envoyer</button>
</form>

<?php
require_once (__DIR__ . DIRECTORY_SEPARATOR ."footer.php");
?>