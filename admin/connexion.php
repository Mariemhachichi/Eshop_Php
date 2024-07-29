<?php
session_start();
if (isset($_SESSION["nom"])) {
    header('Location:profile.php');
}

include '../inc/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Vérifier si le formulaire est soumis
    // Démarrer la session
    session_start();
    
    // Vérifier les identifiants utilisateur
    $visiteur = ConnectAdmin($_POST);

    if (is_array($visiteur)&&count($visiteur)>0) { // Vérifier si la connexion a réussi
        // Définir les variables de session
        $_SESSION['id'] = $visiteur['id'];
        $_SESSION['email'] = $visiteur['email'];
        $_SESSION['nom'] = $visiteur['nom'];
        $_SESSION['mp'] = $visiteur['mp'];
  
        echo "<script>alert('Connexion réussie'); window.location.href='profile.php';</script>";
    } else {
        echo "<script>alert('Identifiants incorrects');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script defer src="../js/bootstrap.bundle.js"></script>
    <title>E-Shop</title>
</head>
<body>

    <!-- Form -->
    <div class="container my-5">
        <h2 class="mb-4">Espace Admin : Connexion</h2>
        <form action="" method="post">
            <div class="form-group col-md-6 my-4">
                <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
            </div>
            <div class="form-group col-md-6 my-4">
                <input type="password" name="mp" class="form-control" id="password" placeholder="Mot de Passe" required>
            </div>
            <button type="submit" class="btn btn-primary">Se Connecter</button>
        </form>
    </div>
    
    <!--Footer-->
    <!-- <footer class="bg-dark text-white py-4">
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
    </footer> -->
</body>
</html>
