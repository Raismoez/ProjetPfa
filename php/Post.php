<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/poster.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Ma Maison</title>
</head>


  <header class="header">
    <a href="#" class="logo">
      <img src="../image/Mamaison.png" alt="logo">
    </a>
    <nav class="navbar">
      <a href="index.php" >Acceuil</a>
      <a href="inscription.php">S'inscrire</a>
	  <a href="seconnecter.php">Connexion</a>
	   <a href="Post.php">Poster Votre Annonce</a>
      <a href="apropos.php">A propos</a>
	  
     
    </nav>
   

   
  </header>
<body>

    <h1>Poster une maison à louer</h1>
    <form  action="../php/poster.php" method="post">
        <label class ="m"for="titre">Titre de l'annonce :</label><br>
        <input type="text" id="titre" name="titre" required><br><br>
        
        <label class ="m" for="description">Description :</label><br>
        <textarea id="description" name="description" rows="4" required></textarea><br><br>
        
        <label class ="m" for="loyer">Loyer (en Dinars) :</label><br>
        <input type="number" id="loyer" name="loyer" required><br><br>
        
        <label class ="m"for="surface">Surface (en m²) :</label><br>
        <input type="number" id="surface" name="surface" required><br><br>
        
        <label class ="m" for="localisation">Localisation :</label><br>
        <input type="text" id="localisation" name="localisation" required><br><br>
        
        <label class ="m" for="photo">Photo :</label><br>
        <input type="file" id="photo" name="photo" accept="image/*"><br><br>
        
        <button type="submit">Poster l'annonce</button>
    </form>
	

<footer>

                    <div class="footer-content">
                    <ul class="socials">
                            <i class="bi bi-facebook"></i>
                        
                          <li><a href="https://www.facebook.com/">Facebook</a></li>
                          <i class="bi bi-instagram"></i>

                          <li><a href="https://www.instagram.com/">Instagram</a></li>
                            <i class="bi bi-geo-alt" ></i>
                            
                            <li><a href="#">ESEN, Technopole La Manouba, CP 2010</a></li>
                        <li>
                      
                    </ul>
                </div>
                <div class="footer-bottom">
                    
                    <p>Designed by:Rais Moez/akrem ben chagra			</p>
                    <p> &copy;2022-2023 </p>
                    
                </div>
            </footer>
</body>
</html>
