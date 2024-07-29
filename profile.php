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
    <title>E-Shop</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script defer src="js/bootstrap.bundle.js"></script>
     </head>
<body>
<?php
include "inc/header.php "
?>
  <div class="d-flex justify-content-end">
            <a href="deconnexion.php">Déconnexion</a>
        </div>
        <div class="mb-4">
            <h2>Bienvenue, <?php echo isset($_SESSION['prenom']) ? htmlspecialchars($_SESSION['prenom']) : 'Prénom non défini'; ?> <?php echo isset($_SESSION['nom']) ? htmlspecialchars($_SESSION['nom']) : 'Nom non défini'; ?> !</h2>
            <p class="lead">Votre email est : <?php echo isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : 'Email non défini'; ?></p>
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
