<?php

require("../config/commandes.php");


if(isset($_POST['valider'])) {
    if(isset($_POST['image']) && isset($_POST['nom']) && isset($_POST['prix']) && isset($_POST['categorie'])) {
        if(!empty($_POST['image']) && !empty($_POST['nom']) && !empty($_POST['prix']) && !empty($_POST['categorie'])) {
            $image = htmlspecialchars(strip_tags($_POST['image']));
            $nom = htmlspecialchars(strip_tags($_POST['nom']));
            $prix = htmlspecialchars(strip_tags($_POST['prix']));
            $categorie = htmlspecialchars(strip_tags($_POST['categorie']));

            try {
                ajouter($image, $nom, $prix, $categorie); 
            } catch(Exception $e) {
                echo $e->getMessage();
            }
        } 
    } 
}

$produits = afficher();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajoute</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <style>
        
        img {
            width: 100%; 
            height: auto;
        }

    .navbar {
      overflow: hidden;
      
    }
    .navbar a {
      float: left;
      display: block;
      color: white;
      text-align: center;
      padding: 14px 20px;
      text-decoration: none;
    }
    .navbar a:hover {
      background-color: #ddd;
      color: black;
    }
    .navbar a.active {
      background-color: #555;
      color: white;
    }
    </style>
    </head>
<body>


<header >

<nav class="navbar bg-dark">
<div class="navbar">
  <a class="navbar-brand text-white" href="#">ArameShop</a>
  <a href="index.php">Nouveau</a>
  <a href="supprimer.php">Suppression</a>
  <a  class="nav-link-active" href="afficher.php">Produits</a>

  <div style="display:flex;">
        <a href="../index.php" class="btn btn-dark">Retour</a>
      </div>
     
    </div>
</div>
</nav>



  
</header>
<h2 class="bg-dark text-white text-center m-4">Ajouter un nouveau produit</h2>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
               
                <form  action="upload.php" method="post" enctype="multipart/form-data">
                   
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                       
                    </div>
                    <div class="mb-3">
                        <label for="inputNom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="inputNom" name="nom" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputPrix" class="form-label">Prix</label>
                        <input type="number" class="form-control" id="inputPrix" name="prix" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputCategorie" class="form-label">Catégorie</label>
                        <input type="text" class="form-control" id="inputCategorie" name="categorie" required>
                    </div>
                    <button type="submit" name="valider" class="btn btn-success">Ajouter </button></br></br>
                </form>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach($produits as $produit):?>
                <div class="col">
                <div class="card shadow-sm">
                        <title><?=$produit->nom?></title>
                        <img src="<?= $produit->image ?>" class="produit-image" class="card-img-top"  >
                        <div class="card-body">
                            <p class="card-text"><?=$produit->categorie?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-white   bg-primary">
                                        <a  class="text-white"href="admin/index.php">Acheter</a>
                                    </button>
                                </div>
                                <small class="text-muted"><?=$produit->prix?></small>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?> 
            </div>
        </div>
    </div>
</body>
</html>
