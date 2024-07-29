<?php
session_start();
include 'inc/functions.php';

// Initialisation des variables
$categories = [];
$produits = [];

// Appel de la fonction et récupération des catégories
try {
    $categories = getallCategories();
} catch (Exception $e) {
    // Gérer les erreurs si nécessaire
    echo "Erreur lors de la récupération des catégories : " . htmlspecialchars($e->getMessage());
}

// Traitement de la recherche de produits
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['Rechercher']) && !empty($_POST['Rechercher'])) {
        // Recherche les produits si un terme de recherche est fourni
        try {
            $produits = searchProduits($_POST['Rechercher']);
        } catch (Exception $e) {
            echo "Erreur lors de la recherche des produits : " . htmlspecialchars($e->getMessage());
        }
    } else {
        // Récupère tous les produits si aucun terme de recherche n'est fourni
        try {
            $produits = getallProduct();
        } catch (Exception $e) {
            echo "Erreur lors de la récupération des produits : " . htmlspecialchars($e->getMessage());
        }
    }
} else {
    // Récupère tous les produits si la page est chargée sans soumission du formulaire
    try {
        $produits = getallProduct();
    } catch (Exception $e) {
        echo "Erreur lors de la récupération des produits : " . htmlspecialchars($e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script defer src="js/bootstrap.bundle.js"></script>
    <title>E-Shop</title>
</head>
<body>
<!-- navbar -->
<?php include "inc/header.php"; ?>


<!-- search -->
<div class="container my-5 col-md-3">
    <form class="input-group" action="index.php" method="POST">
        <input type="search" class="form-control rounded" placeholder="Rechercher..." aria-label="Rechercher" aria-describedby="Rechercher" name="Rechercher"/>
        <button type="submit" class="btn btn-outline-primary" data-mdb-ripple-init>Rechercher</button>
    </form>
</div>
<!-- Les Produits -->
<div class="container my-5">
    <div class="row">
        <?php
        if (!empty($produits)) {
            foreach ($produits as $produit) {
                echo '<div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Card image">
                            <div class="card-body">
                                <h5 class="card-title">' . htmlspecialchars($produit['nom']) . '</h5>
                                <p class="card-text">' . htmlspecialchars($produit['description']) . '</p>
                                <a href="produit.php?id='.$produit['id'].'" class="btn btn-primary">Afficher</a>
                            </div>
                        </div>
                    </div>';
            }
        } else {
            echo '<p>Aucun produit trouvé.</p>';
        }
        ?>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-3">
                <h5>About Us</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris.</p>
            </div>
            <div class="col-md-3 mb-3">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Home</a></li>
                    <li><a href="#" class="text-white">About</a></li>
                    <li><a href="#" class="text-white">Services</a></li>
                    <li><a href="#" class="text-white">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-3">
                <h5>Contact Us</h5>
                <p>
                    123 Street Name<br>
                    City, State, 12345<br>
                    Email: info@example.com<br>
                    Phone: (123) 456-7890
                </p>
            </div>
            <div class="col-md-3 mb-3">
                <h5>Follow Us</h5>
                <a href="#" class="text-white mr-2"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white mr-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white mr-2"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <div class="text-center pt-3">
            <p>&copy; 2024 Your Company. All rights reserved.</p>
        </div>
    </div>
</footer>
</body>
</html>
