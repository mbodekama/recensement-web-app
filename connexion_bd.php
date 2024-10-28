<?php
$host = "185.98.131.160"; // adresse de l'hôte de la base de données
$username = "cervo2054563"; // nom d'utilisateur pour se connecter à la base de données
$password = "cY6-wyx42kagRPm"; // mot de passe pour se connecter à la base de données
$database = "cervo2054563_4s1bix"; // nom de la base de données

// Créer une instance de PDO pour se connecter à la base de données
try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connexion à la base de données réussie.";
} catch(PDOException $e) {
    echo "La connexion à la base de données a échoué: " . $e->getMessage();
}

