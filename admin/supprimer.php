<?php


require("../config/commandes.php");
$produits=afficher();
if(isset($_POST['valider'])) {
    if( isset($_POST['id'])) {
        if(!empty($_POST['id']) AND is_numeric($_POST['id'])) 
        {
            $id = htmlspecialchars(strip_tags($_POST['id']));

            try {
                supprimer($id); 
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
    <title>suppression</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<style>    
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
  

    <div class="album py-5 bg-light">
    <h2 class="bg-dark text-white text-center m-4">Supprimer un produit</h2>
        <div class="container">

                <form method="post">
                    <div class="mb-3">
          

                    <div class="mb-3">
                        <label for="inputPrix" class="form-label">Identifiant du produit</label>
                        <input type="number" class="form-control" id="inputPrix" name="id" required>
                    </div>
                 
                    <button type="submit" name="valider" class="btn btn-danger">Supprimer </button></br></br>
                </form>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach($produits as $produit):?>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="<?= $produit->image ?>" class="card-img-top" alt="Image du produit">
                        <h3><?=$produit->id?></h3>

                        <div class="card-body">

                            
                        </div>
                    </div>
                </div>
                <?php endforeach;?> 
            </div>
        </div>
    </div>
</body>
</html>
