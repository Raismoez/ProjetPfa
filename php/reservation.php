<?php
require_once "connexion.php";
$bdd = maConnexion();

if(empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['cin'])) {
    die("Veuillez remplir tous les champs");
}

$fnom = $bdd->quote($_POST["first_name"]);
$lnom = $bdd->quote($_POST["last_name"]);
$cin = $bdd->quote($_POST["cin"]);
$datededepart = $bdd->quote($_POST["datededepart"]);
$datedarrive = $bdd->quote($_POST["datedarrive"]);
$Numerodetelephone = $bdd->quote($_POST["phone_number"]); 
$NombreDePersonne = $bdd->quote($_POST["number_of_people"]);
$commentaire = $bdd->quote($_POST["commentaire"]);

$sql = "INSERT INTO réservation (nom, prénom, CIN, `Date D'arrivée`, `Date De Depart`, `Numéro de téléphone`, `Nombre De Personne`, Commentaires) VALUES ($fnom, $lnom, $cin, $datedarrive, $datededepart, $Numerodetelephone, $NombreDePersonne, $commentaire)";

try {
    $resultat = $bdd->exec($sql);
    if($resultat) {
        echo "Bienvenue chez nous";
    } else {
        echo "Erreur";
    }
} catch(PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
?>
