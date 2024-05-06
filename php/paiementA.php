<?php

require_once 'connexion.php';
$connection=maConnexion();
$select = "SELECT * FROM paiement";
try{
$res=$connection->query($select);
}catch (PDOEception $e) {
die ($e->getMessage()) ;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Admin Page</title>
  <link rel="stylesheet" href="ad.css">
</head>
 <header>
    <h1>admin page</h1>
  </header>
  <div class="container">
    <nav class="vertical-menu">
	
       <a href="produitadmin.php">produits</a>
      <a href="ajoutproduit.php">ajout produit</a>  
	  <a href="reseradmin.php">réservation</a>  
	  <a href="paiement.php">paiement</a>
	  <a href="livraisonad.php">livraison</a>	 
	  <a href="clientadmin.php">client</a>
	
    </nav>
    
  <body>
<table>
      <thead>
        <tr>
          <th>nom</th>
		  <th>phone</th>         		  
		  <th>product-name</th>	
		  <th>quantite</th>
		  <th>cin </th>
		  <th>supprimer </th>
        </tr>
      </thead>
      <tbody>
	   <?php
      while ($result = $res->fetchObject()) {
        echo "<tr>";
        echo "<td>" . $result->nom . "</td>";
        echo "<td>" . $result->telephone . "</td>";
        echo "<td>" . $result->id_produit . "</td>"; 
		echo "<td>" . $result->quantité . "</td>"; 
		echo "<td>" . $result->	cin  . "</td>";

      
        echo "<td><a href='del.php?cin=" . $result->cin . "'>supprimer</a></td>";
        echo "</tr>";
      }
      ?>
       
			
      </tbody>
    </table>
  </div>
  <footer>
    <p>designed by: aymen lahmer & sirine wertani </p>
                    <p> &copy;2022-2023 </p>
  </footer>
</body>