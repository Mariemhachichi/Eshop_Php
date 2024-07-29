<?php
session_start();
if (!isset($_SESSION["nom"])) {
    header('Location: connexion.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>aaaaaaaaaaaaaaa<?php echo isset($_SESSION['nom']) ? htmlspecialchars($_SESSION['nom']) : 'Non défini'; ?></h1>
    <a href="deconnexion.php">Déconnexion</a>
</body>
</html>
