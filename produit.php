<?php
include 'inc/functions.php';

// Initialisation des variables
$categories = [];


// Appel de la fonction et récupération des catégories
try {
    $categories = getallCategories();
} catch (Exception $e) {
    // Gérer les erreurs si nécessaire
    echo "Erreur lors de la récupération des catégories : " . htmlspecialchars($e->getMessage());
}

//Pdt
if (isset($_GET['id'])){
   $produit = getProduitById($_GET['id']);
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

<!-- Le Produit -->
<div class="container my-4 offset-5">
    <div class="row">
    <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $produit['nom']?></h5>
    <p class="card-text"><?php echo $produit['description']?>/p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo $produit['prix']?> DT</li>
    <li class="list-group-item"><?php echo $produit['categorie']?></li>

  </ul>

</div>
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
