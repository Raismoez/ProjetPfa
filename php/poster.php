<?php
require_once "connexion.php";
$bdd = maConnexion();

if(empty($_POST['titre']) || empty($_POST['description']) || empty($_POST['loyer']) || empty($_POST['surface']) || empty($_POST['localisation'])) {
    die("Veuillez remplir tous les champs");
}

$titre = $bdd->quote($_POST["titre"]);
$description = $bdd->quote($_POST["description"]);
$loyer = $bdd->quote($_POST["loyer"]);
$surface = $bdd->quote($_POST["surface"]);
$localisation = $bdd->quote($_POST["localisation"]);

$sql = "INSERT INTO poster (`Titre de l'annonce`, description, prix, `Surface (en m²)`, Localisation) VALUES ($titre, $description, $loyer, $surface, $localisation)";

try {
    $resultat = $bdd->exec($sql);
    if($resultat) {
        echo "La maison a été poster";
    } else {
        echo "Erreur";
    }
}
catch(PDOException $e) {
    die($e->getMessage());
}

?>
