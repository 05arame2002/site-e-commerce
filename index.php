<?php
require("config/commandes.php");
$produits=afficher();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="Aramista" content="diouf and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Mini e-commerce</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

     
        
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
  <a href="admin/index.php">Nouveau</a>
  <a href="admin/supprimer.php">Suppression</a>
  <a href="admin/afficher.php">Produits</a>
</div>
</nav>
  
</header>

<main>
  
      <h1 class="text-white bg-dark text-center border-radius">Bienvenue chez ArameShop!</h1>
  

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php foreach($produits as $produit):?>
        <div class="col">
          <div class="card shadow-sm">
           <h4 class="text-center font-size-12 bg-dark text-white"><?=$produit->nom?><h4>
           <img src="./admin/<?= $produit->image?>" width="10" height="10"alt="20" alt="image du produit">
        
            <div class="card-body">
              <p class="card-text font-size-10" ><?=$produit->categorie?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group ">
                  <button type="button" class="btn btn-sm btn-outline-secondary  bg-primary underline-none">
                    <a class="text-white underline-none" href="admin/afficher.php">Voir plus</a>
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

</main>




    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <div class="container-fluid">
        <div class="row">
            <footer class="bg-dark text-white text-center py-6 m-6">
                <div class="col">
                    <p>&copy;2024 Votre Entreprise. Tous droits réservés.</p>
                    <p>
                        <a href="https://www.facebook.com/VotrePageFacebook" class="text-white me-3" target="_blank"><i class="fab fa-facebook"></i> </a>
                        <a href="https://twitter.com/VotreCompteTwitter" class="text-white me-3" target="_blank"><i class="fab fa-twitter"></i> </a>
                        <a href="https://www.instagram.com/VotreCompteInstagram" class="text-white me-3" target="_blank"><i class="fab fa-instagram"></i> </a>
                    </p>
                </div>
            </footer>
        </div>
    </div>

    <!-- JavaScript (facultatif si vous ne prévoyez pas d'interactivité) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
      
  </body>
</html>
