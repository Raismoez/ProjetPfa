<?php

class client
{
	private $cin;
	private $Nom;
	private $Prenom;
	private $email;
	private $psw;
	
  
	public function __construct( $cin ,$nom , $prenom , $email , $pwd )
{
	$this->cin=$cin;
	$this->Nom=$nom;
	$this->Prenom=$prenom;	
	$this->email=$email;
	$this->psw=$pwd;
}
public function getcin()
{
	return $this->cin;
}

public function getnom()
{
	return $this->Nom;
}

public function getprenom()
{
	return $this->Prenom;
}


public function getemail()
{
	return $this->email;
}



public function getpsw()
{
	return $this->psw;
}


public static function login($email, $password)
{

    $connexionbd = new Connexion();
    $query = "SELECT * FROM `client` WHERE `Adresse` = '$email' AND `mot de passe` = '$password'";
    $result = $connexionbd->query($query);

	    if ($result->rowCount()==1){
        header('Location: index.php');
	
    }
	else
	{
		header("seconnecter.php?error=invalide email or password");
    }


    

	
}

public static function ajoutclient($client) {
    $connexionbd = new Connexion();
    $conn = $connexionbd->connect();

    try {
        $query = "INSERT INTO client (CIN, Nom, Prenom, Adresse, mot de passe) VALUES ($cin, $nom, $prenom, $email, $password)";
        $statement = $conn->prepare($query);
        $statement->execute(array(
		    $cin => $client->getcin(),
            $nom => $client->getnom(),
            $prenom => $client->getprenom(),
            $email => $client->getemail(),
            $password => $client->getpsw()
        ));

        return true; // Succès de l'insertion
    } catch (PDOException $e) {
        echo "Erreur d'insertion : " . $e->getMessage();
        return false; // Échec de l'insertion
    }
}

 public static function deleteClient($cin) {
    $connexionbd = new Connexion();
    $result = $connexionbd->exec("DELETE FROM `client` WHERE `cin` = $cin");
    return $result;
 }

}
?>