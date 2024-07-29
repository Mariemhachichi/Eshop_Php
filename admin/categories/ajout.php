<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['id'])) {
    header('Location: login.php'); // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    exit();
}

include "../../inc/functions.php";

// Assurer que la méthode de la requête est POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer et assainir les données POST
    $nom = htmlspecialchars($_POST['nom']);
    $description = htmlspecialchars($_POST['description']);
    $createur = $_SESSION['id'];
    $date_creation = date("Y-m-d");

    // Connexion à la base de données
    $conn = connect();

    try {
        // Préparer la requête SQL
        $requette = $conn->prepare("INSERT INTO categorie (nom, description, createur, date_creation) VALUES (:nom, :description, :createur, :date_creation)");

        // Lier les paramètres
        $requette->bindParam(':nom', $nom);
        $requette->bindParam(':description', $description);
        $requette->bindParam(':createur', $createur);
        $requette->bindParam(':date_creation', $date_creation);

        // Exécuter la requête
        $resultat = $requette->execute();

        if ($resultat) {
            header('Location: liste.php');
            exit();
        } else {
            echo "Une erreur est survenue lors de l'ajout de la catégorie.";
        }
    } catch (PDOException $e) {
        // Afficher l'erreur si la requête échoue
        echo "Erreur : " . $e->getMessage();
    }
} else {
    // Si ce n'est pas une requête POST, rediriger vers la page d'ajout de catégorie
    header('Location: ajouter.php');
    exit();
}
?>
