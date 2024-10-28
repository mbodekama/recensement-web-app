<?php
session_start(); // démarrer la session pour stocker les informations d'authentification
require('connexion_bd.php');

if(isset($_POST['telephone']) && isset($_POST['nom'])) {
// Récupérer les données du formulaire
$nom = $_POST['nom'];
$telephone = $_POST['telephone'];
$activite = $_POST['activite'];
$secteur = $_POST['secteur'];
$agent = $_SESSION['user_id'];

// Vérifier les informations d'authentification dans la base de données ou un autre système d'authentification

     

    // Préparer la requête d'insertion
    $stmt = $conn->prepare("INSERT INTO vendeur (nom,secteur, telephone, activite,agent) VALUES (:nom,:secteur, :telephone, :activite,:agent)");
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':secteur', $secteur);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':activite', $activite);
    $stmt->bindParam(':agent', $agent);
    $stmt->execute();

        $_SESSION['notif_add_vendeur'] = 1;
        header('Location: save_contact.php'); // rediriger vers la page sécurisée


}
else
{
    echo "BAD FORM";
}
?>