     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">E-Shop</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Catégorie 
                </a>
                <ul class="dropdown-menu">
                    <?php
                        foreach ($categories as $cate) {
                            echo '<li><a class="dropdown-item" href="#">' . htmlspecialchars($cate['nom']) . '</a></li>';
                        }
                    ?>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="connexion.php">Se connecter</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registre.php">S'inscrire</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Fin Navbar -->
<!-- search -->
<div class="container my-5 col-md-3">
    <form class="input-group" action="index.php" method="POST">
        <input type="search" class="form-control rounded" placeholder="Rechercher..." aria-label="Rechercher" aria-describedby="Rechercher" name="Rechercher"/>
        <button type="submit" class="btn btn-outline-primary" data-mdb-ripple-init>Rechercher</button>
    </form>
</div>
