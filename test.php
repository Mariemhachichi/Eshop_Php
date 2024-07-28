<!-- <?php
$user = "root";
$pass = ""; 
$dbname = "ecommerce";
$host = "localhost";


$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

try {
    // Création de l'instance PDO
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Gestion des erreurs par exception
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Mode de récupération des résultats par défaut
        PDO::ATTR_EMULATE_PREPARES => false, // Désactivation de l'émulation des requêtes préparées
    ]);
    echo "Connexion réussie !"; // Message de confirmation de connexion
} catch (\PDOException $e) {
    // Gestion des erreurs de connexion
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?> -->