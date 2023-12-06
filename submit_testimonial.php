<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testimonialsDB";

// Créer une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Récupérer les données du formulaire
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$message = $_POST['message'];

// Préparer et exécuter la requête d'insertion
$sql = "INSERT INTO testimonials (fullName, email, message) VALUES ('$fullName', '$email', '$message')";
if ($conn->query($sql) === TRUE) {
  $conn->close();
  header("Location: merci.html"); // Redirection vers la page de remerciement
  exit();
} else {
  echo "Erreur: " . $sql . "<br>" . $conn->error;
}

// Fermer la connexion
$conn->close();
?>
