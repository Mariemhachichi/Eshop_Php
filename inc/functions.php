<?php
 function connect(){
    
    // 1. Connexion à la base de données
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
    } catch (\PDOException $e) {
        // Gestion des erreurs de connexion
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
    return $pdo;
 }


function getallCategories(){
    $pdo = connect();
    // 2. Création de la requête
    $requette = "SELECT * FROM categorie";
    
    try {
        // 3. Exécution de la requête
        $resultat = $pdo->query($requette);
    
        // 4. Récupération des résultats
        $categories = $resultat->fetchAll();
        
    return $categories;
    
    } catch (\PDOException $e) {
        // Gestion des erreurs de requête SQL
        echo "Erreur lors de l'exécution de la requête : " . $e->getMessage();
        $categories = [];
    }
}

function getallProduct(){
    $pdo = connect();
        
        // 2. Création de la requête
        $requette = "SELECT * FROM produit";
        
        try {
            // 3. Exécution de la requête
            $resultat = $pdo->query($requette);
        
            // 4. Récupération des résultats
            $produits = $resultat->fetchAll();
            
        return $produits;
        
        } catch (\PDOException $e) {
            // Gestion des erreurs de requête SQL
            echo "Erreur lors de l'exécution de la requête : " . $e->getMessage();
            $produits = [];
        }
}


//Recherche

function searchProduits($keyword){
    $pdo = connect();

     // 2. Création de la requête
     $requette = "SELECT * FROM produit where nom LIKE '%$keyword%' ";
        
     try {
         // 3. Exécution de la requête
         $resultat = $pdo->query($requette);
     
         // 4. Récupération des résultats
         $produits = $resultat->fetchAll();
         
     return $produits;
     
     } catch (\PDOException $e) {
         // Gestion des erreurs de requête SQL
         echo "Erreur lors de l'exécution de la requête : " . $e->getMessage();
         $produits = [];
     }
}

//afficher pdt
function getProduitById($id){
$pdo = connect();
     // 2. Création de la requête
     $requette = "SELECT * FROM produit where id=$id";
     try {
        // 3. Exécution de la requête
        $resultat = $pdo->query($requette);
    
        // 4. Récupération des résultats
        $produit = $resultat->fetch();
        
    return $produit;
    
    } catch (\PDOException $e) {
        // Gestion des erreurs de requête SQL
        echo "Erreur lors de l'exécution de la requête : " . $e->getMessage();
        $produit = [];
    }
}