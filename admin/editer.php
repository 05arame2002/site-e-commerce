<?php
if(!isset($_GET['pdt'])){
    header("Location:afficher.php");
}

if(empty($_GET['pdt']) AND !is_numeric($_GET['pdt'])){
    header("Location:afficher.php");

}
$id = $_GET['pdt'];
require("../config/commandes.php");

$produits=getproduit($id);

foreach($produits as $produit){
    $idpdt = $produit->id;
    $nom = $produit->nom;
    $image = $produit->image;
    $prix = $produit->prix;
    $categorie = $produit->categorie;
}

if(isset($_POST['valider'])) 
{
if(isset($_POST['image']) && isset($_POST['nom']) && isset($_POST['prix']) && isset($_POST['categorie'])) 
{
if(!empty($_POST['image']) && !empty($_POST['nom']) && !empty($_POST['prix']) && !empty($_POST['categorie'])) 
    {
            $image = htmlspecialchars(strip_tags($_POST['image']));
            $nom = htmlspecialchars(strip_tags($_POST['nom']));
            $prix = htmlspecialchars(strip_tags($_POST['prix']));
            $categorie = htmlspecialchars(strip_tags($_POST['categorie']));

            modifier($image, $nom, $prix, $categorie,$id);
            header("Location:afficher.php"); 
           
            }
        } 
    } 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajoute</title>
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

<header >


<nav class="navbar bg-dark">
<div class="navbar">
  <a class="navbar-brand text-white" href="#">ArameShop</a>
  <a href="index.php">Nouveau</a>
  <a href="supprimer.php">Suppression</a>
  <a  class="nav-link-active" href="afficher.php">Produits</a>
  <a class="nav-link-active text-white" href="#" style="font-weight:bold; color:green;">Modification</a>


  <div style="display:flex;">
        <a href="../index.php" class="btn btn-dark">Retour</a>
      </div>
     
    </div>
</div>
</nav>

       
  
</header>


<h2 class="bg-dark text-white text-center m-4">Modifier un produit</h2>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
               
                <form method="post">
                   
                    <div class="mb-3">
                        <label for="inputImage" class="form-label">Image</label>
                        <input type="text" class="form-control" id="inputImage" name="image" required value="<?=$produit->image?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputNom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="inputNom" name="nom" required value="<?=$produit->nom?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputPrix" class="form-label">Prix</label>
                        <input type="number" class="form-control" id="inputPrix" name="prix" required value="<?=$produit->prix?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputCategorie" class="form-label">Catégorie</label>
                        <input type="text" class="form-control" id="inputCategorie" name="categorie" required value="<?=$produit->categorie?>">
                    </div>
                    <button type="submit" name="valider" class="btn btn-warning color-white" >Enregistrer </button></br></br>
                </form>
            </div>
            
</body>
</html>
