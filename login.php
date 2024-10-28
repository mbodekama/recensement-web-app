<?php
session_start(); // démarrer la session pour stocker les informations d'authentification
require('connexion_bd.php');

if(isset($_POST['name']) && isset($_POST['password'])) {
    $email = $_POST['name'];
    $password = $_POST['password'];

    // Vérifier les informations d'authentification dans la base de données ou un autre système d'authentification


 // Préparer la requête pour récupérer l'utilisateur avec cet email et ce mot de passe
    $stmt = $conn->prepare("SELECT * FROM user WHERE email = :email AND password = :password");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    // Vérifier si un utilisateur a été trouvé
    $user = $stmt->fetch();
    if ($user) {
        $_SESSION['connected'] = 1;
        $_SESSION['user_id'] = $user['id'];
        echo "Authentification réussie.";
        if($user['email'] == "admin")
        {
        header('Location: dash.php'); // rediriger vers la page sécurisée
        }else
        {
        header('Location: save_contact.php'); // rediriger vers la page sécurisée

        }
        exit();
    } else {
        echo "Email ou mot de passe incorrect.";
        header('Location: index.html'); // rediriger vers la page sécurisée

    }

}
else
{
    echo "BAD FORM";
}
?>