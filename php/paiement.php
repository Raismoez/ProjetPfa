<?php
require_once"connexion.php";
$bdd= maConnexion();

	
if(empty($_POST['nom']) or empty($_POST['prenom'])  )
{
    die("veuillez remplir tous les champs");
}
$nom=$bdd->quote($_POST["nom"]);
$prenom=$bdd->quote($_POST["prenom"]);
$email=$bdd->quote($_POST["email"]);
$NumérodeCarte=$bdd->quote($_POST["carte"]);
$DatedExpiration=$bdd->quote($_POST["expiration"]);
$CVV=$bdd->quote($_POST["cvv"]);


$sql="INSERT INTO paiement (Nom,Prenom,Email,Numéro de Carte,Date d'Expiration,CVV) values ($nom,$prenom,$email,$NumérodeCarte,$DatedExpiration,$CVV)";
try{
    $resultat = $bdd->exec($sql);
       if ($resultat) {
        
    header('Location: /MaMaison/html/index.php'); 
        exit();
    } else {
      
        $error = "error";
  }
}catch(PDOException $e){
    die($e->getMessage());
}

?>