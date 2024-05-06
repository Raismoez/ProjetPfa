<?php
require_once "clientM.php";
require_once"connexion.php";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["form_name"]) && $_POST["form_name"] == "con")  {
    $email = $_POST['username'];
    $password = $_POST['psw'];

    $client = client::login($email, $password);

    if ($client) {
        // login successful, redirect to dashboard
    header('Location: index.php'); 
        exit();
    } else {
      
        $error = "Invalid email or password";
  }
}
 
 if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["form_name"]) && $_POST["form_name"] == "in") {



$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$cin = $_POST['cin'];
$email = $_POST['email'];
$pwd = $_POST['psw'];
$cl = new client($nom , $prenom , $cin , $email , $pwd );
$client = client::ajoutclient($cl);

   

    if ($client) {
        // login successful
    header('seconnecter.php');

        exit();
		  } else {
      
        $error = "Invalid email or password";
  
}
 
 }



?>