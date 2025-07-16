<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "mon_inscription";

// Connexion
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Erreur de connexion : " . $conn->connect_error);
}

// Récupération des champs
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$naissance = $_POST['naissance'];
$adresse = $_POST['adresse'];
$email = $_POST['email'];
$profession = $_POST['profession'];
$experience = $_POST['experience'];
$message = $_POST['message'];

// Requête SQL
$sql = "INSERT INTO utilisateurs (nom, prenom, naissance, adresse, email, profession, experience, message)
VALUES ('$nom', '$prenom', '$naissance', '$adresse', '$email', '$profession', '$experience', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "✅ Inscription enregistrée avec succès.";
} else {
  echo "❌ Erreur : " . $conn->error;
}

$conn->close();
?>
