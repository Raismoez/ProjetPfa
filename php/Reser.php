<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Ma Maison</title>
    <meta name="viewport" content="width=device_width, initial-scale=1">
    <meta name="description" content="Totech est une startup qui offre le service de réservation et achat online des trotinettes electrique" />
    <meta name="keywords" content="Achat, vente, technologie, e-commerce, recherche, trottinette electrique, vehicule electrique, Tunisie, location" />
    <link rel="stylesheet" href="../css/reservation.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="verifform.js"></script>
</head>
<body>
    <div class="resform">
        <h1>Réservation</h1>
        <div class="main">
            <form name="form" method="POST" action="../php/reservation.php">
                <div id="name">
                    <h2 class="name">Nom et prénom</h2>
                    <input class="firstname" type="text" name="first_name" placeholder="Nom "><br>
                    <input class="lastname" type="text" name="last_name" placeholder="Prénom">
                </div>
				<h2 class="name">CIN</h2>
                <input class="cin" type="cin" name="cin" placeholder="CIN">
                <h2 class="name">Date D'arrivée</h2>
                <input class="dat" type="date" name="datededepart">
                
                <h2 class="name">Date De Depart</h2>
                <input class="dat" type="date" name="datedarrive">
                
                <h2 class="name">Numéro de téléphone</h2>
                <input class="num" type="tel" name="phone_number" placeholder="Numéro de téléphone">

                <h2 class="name">Nombre De Personne</h2>
                <select name="number_of_people" class="dur">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
					<option value="3">4</option>
					<option value="3">5</option>
					<option value="3">6</option>
					<option value="3">7</option>
					<option value="3">8</option>
					<option value="3">9</option>
					<option value="3">10</option>
					<option value="3">11</option>
					<option value="3">12</option>
					
                    <!-- Ajoutez d'autres options si nécessaire -->
                </select>
                
                <h2 class="name">Commentaires</h2>
                <textarea class="commentaire" name="commentaire" placeholder="Message" cols="50" id="commentaires"></textarea>
                
                <div>
                    <button onclick="verif()">Réserver</button>
                </div><br>
                <a href="index.php">Retourner à l'Accueil</a>
            </form>
        </div>
    </div>
</body>
</html>
