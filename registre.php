<?php
include 'inc/functions.php';

// Initialisation de la variable $categories
$categories = [];

// Appel de la fonction et récupération des catégories
try {
    $categories = getallCategories();
} catch (Exception $e) {
    // Gérer les erreurs si nécessaire
    echo "Erreur lors de la récupération des catégories : " . $e->getMessage();
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Shop</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script defer src="js/bootstrap.bundle.js"></script>
     </head>
<body>
 <!-- navbar -->
<?php
include "inc/header.php";
?>
      <!-- Fin Navbar-->

      <!-- form -->
      <div class="container my-5">
        <h2 class="mb-4">Formulaire d'Inscription</h2>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6 my-4">
                    <input type="text" class="form-control" id="firstName" placeholder="Prénom">
                </div>
                <div class="form-group col-md-6 my-4">
                    <input type="text" class="form-control" id="lastName" placeholder="Nom">
                </div>
                <div class="form-group col-md-6 my-4">
                    <input type="text" class="form-control" id="lastName" placeholder="Télephone">
                </div>
            </div>
            <div class="form-group col-md-6 my-4">
                <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group col-md-6 my-4">
                <input type="password" class="form-control" id="password" placeholder="Mot de Passe">
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
    </div>
<!--Fin form-->

    <!--Footer-->
        <footer class="bg-dark text-white py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <h5>About Us</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
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