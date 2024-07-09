<?php
require("../config/commandes.php");
$produits=afficher();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Tous les produits</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
  <a href="afficher.php">Produits</a>

  <div style="display:flex;">
        <a href="../index.php" class="btn btn-dark">Retour</a>
      </div>
     
    </div>
</div>
</nav>
  

    <div class="album py-5 bg-light">
    <h2 class="bg-dark text-white text-center m-6">La liste de tous les produits </h2>
        <div class="container">

               
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
               <table class="table"> 
                  <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Image</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Categorie</th>
                        <th scope="col">Modifier</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($produits as $produit) : ?>
                      <tr>
                        <th scope="row"><?= $produit->id?></th>
                          <td ><img src="<?= $produit->image?>" width="40" alt="20" alt="image du produit"></td>
                          <td><?= $produit->nom?></td>
                          <td style="font-weight:bold;color:green"><?= $produit->prix?>fca</td>
                          <td><?= $produit->categorie?></td>
                          <td>
                            <a href="editer.php?pdt=<?=$produit->id?>"><i class="fa fa-pencil" style="font: size 20px;"></i></a>
                          </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
               </table>
            </div>
        </div>
    </div>
</body>
</html>
