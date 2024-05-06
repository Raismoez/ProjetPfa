<?php
require 'connexion.php';

$cnx = new Connexion();

// Ajouter une réservation
if (isset($_POST['add'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prénom'];
    $cin = $_POST['cin'];
    $date = $_POST['date'];
    $nombre = $_POST['Nombrearéserver'];
    $duree = $_POST['Dureé'];
    $idr = $_POST['idr'];
    $commentaires = $_POST['Commentaires'];

    $sql = "INSERT INTO réservation (nom, prénom, cin, date_reservation, nombre_reserver, duree, idr, commentaires) VALUES ($nom, $prénom, $cin, $date, $nombre, $duree, $idr, $commentaires)";
    $stmt = $cnx->prepare($sql);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prénom', $prenom);
    $stmt->bindParam(':cin', $cin);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':duree', $duree);
    $stmt->bindParam(':idr', $idr);
    $stmt->bindParam(':commentaires', $commentaires);

    if ($stmt->execute()) {
        header("Location: admin.php");
    } else {
        echo "Erreur: " . $stmt->errorInfo()[2];
    }
}

// Mettre à jour une réservation
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prénom'];
    $cin = $_POST['cin'];
    $date = $_POST['date'];
    $nombre = $_POST['Nombrearéserver'];
    $duree = $_POST['Dureé'];
    $idr = $_POST['idr'];
    $commentaires = $_POST['Commentaires'];

    $sql = "UPDATE réservation SET nom = :nom, prénom = :prénom, cin = :cin, date_reservation = :date, nombre_reserver = :nombre, duree = :duree, idr = :idr, commentaires = :commentaires WHERE id = :id";
    $stmt = $cnx->prepare($sql);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prénom', $prenom);
    $stmt->bindParam(':cin', $cin);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':duree', $duree);
    $stmt->bindParam(':idr', $idr);
    $stmt->bindParam(':commentaires', $commentaires);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        header("Location: admin.php");
    } else {
        echo "Erreur: " . $stmt->errorInfo()[2];
    }
}

// Supprimer une réservation
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "DELETE FROM réservation WHERE id = :id";
    $stmt = $cnx->prepare($sql);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        header("Location: admin.php");
    } else {
        echo "Erreur: " . $stmt->errorInfo()[2];
    }
}

// Récupérer les réservations
$sql = "SELECT * FROM réservation";
$result = $cnx->query($sql);
$reservations = $result->fetchAll(PDO::FETCH_ASSOC);
?>

