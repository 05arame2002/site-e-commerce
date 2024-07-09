<?php
require("../config/commandes.php");

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['valider'])) {
    $dir = "image/";
    $image = $_FILES['image']['name'];
    $tmpFile = $_FILES['image']['tmp_name'];
    $typeFile = $_FILES['image']['type'];

    $correct = array("image/png", "image/jpeg", "image/gif", "image/webp", "image/avif");

    if (in_array($typeFile, $correct)) {
        // Vérifier si le répertoire existe, sinon le créer
        if (!file_exists($dir)) {
            mkdir($dir, 0777, true); // Crée le répertoire de manière récursive
        }
        
        if (move_uploaded_file($tmpFile, $dir . $image)) {
            echo "Uploaded !";

            // Connexion à la base de données
            try {
                $conn = new PDO("mysql:host=localhost;dbname=ecommerce", "root", "");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Récupérer les valeurs du formulaire
                $nom = $_POST['nom'];
                $prix = $_POST['prix'];
                $categorie = $_POST['categorie'];

                // Exemple d'utilisation : Enregistrer le chemin de l'image dans la base de données
                $stmt = $conn->prepare("INSERT INTO produits (nom, prix, categorie, image) VALUES (:nom, :prix, :categorie, :image)");
                $stmt->execute([
                    ':nom' => $nom,
                    ':prix' => $prix,
                    ':categorie' => $categorie,
                    ':image' => $dir . $image // Concaténer le répertoire avec le nom de l'image
                ]);

            } catch(PDOException $e) {
                echo "Erreur de connexion à la base de données: " . $e->getMessage();
            }
            
        } else {
            echo "Erreur lors du téléchargement de l'image.";
        }
    } else {
        echo "Type de fichier non pris en charge.";
    }
}
?>
