<?php
// Connexion à la base de données
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "mon_inscription";

$conn = new mysqli($host, $user, $pass, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

// Récupération des données du formulaire
$nom        = $_POST['nom'];
$prenom     = $_POST['prenom'];
$naissance  = $_POST['naissance'];
$adresse    = $_POST['adresse'];
$email      = $_POST['email'];
$profession = $_POST['profession'];
$experience = $_POST['experience'];
$message    = $_POST['message'];

// Requête d'insertion
$sql = "INSERT INTO utilisateurs (nom, prenom, naissance, adresse, email, profession, experience, message)
        VALUES ('$nom', '$prenom', '$naissance', '$adresse', '$email', '$profession', '$experience', '$message')";

// Si tout se passe bien, on redirige vers la page suivante
if ($conn->query($sql) === TRUE) {
    header("Location: index2.html");
    exit;
} else {
    echo "❌ Une erreur est survenue : " . $conn->error;
}

// Fermeture de la connexion
$conn->close();
?>
