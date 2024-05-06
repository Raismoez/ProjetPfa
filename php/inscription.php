<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/inscription.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<script src="../js/script.js"></script>
    <title>Ma Maison</title>
</head>
<body>

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

  <form id="validationInscription" class="modal-content" method="POST" action="clientctrl.php">
    <div class="container">
      <h1>S'inscrire</h1>
      <p>C'est rapide et facile.</p>
      <hr>
	  <label for="cin"><b>CIN</b></label>
      <input type="text" name="cin" id="cin"placeholder="Entrer votre Cin"  required>   
      <label for="name"><b>Nom</b></label>
      <input type="text" id="name" placeholder="Entrer votre Nom" required>
      <label for="prenom"><b>Prénom</b></label>
      <input type="text" id="prenom" placeholder="Entrer votre prénom" required>
      <label for="email"><b>Adresse mail</b></label>
      <input type="text" id="email" placeholder="Entrer votre Email" name="email" required>
      <label for="psw"><b>Mot de passe</b></label>
      <input type="password" id="psw" placeholder="Entrer votre mot de passe" name="psw" required>
      <label for="psw-repeat"><b>Nouveau mot de passe</b></label>
      <input type="password" id="psw-repeat" placeholder="Répéter votre mot de passe" name="psw-repeat" required>
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Mémoriser le mot de passe
      </label>
      <div class="clearfix">
        <button type="button" onclick="submitForm()" class="signupbtn">S'inscrire</button>
      </div>
    </div>
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
      </ul>
    </div>
    <div class="footer-bottom">
      <p>Designed by: Rais Moez/Nabli Youssef Groupe 1</p>
      <p>&copy;2022-2023</p>
    </div>
  </footer>

  
</body>
</html>
