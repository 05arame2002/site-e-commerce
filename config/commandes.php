<?php
function getAdmin($email,$motdepasse){

    if(require("connexion.php"))
    {
        $req = $access->prepare("SELECT * FROM  admin WHERE email = ? AND motdepasse = ?");
        $req->execute(array($email,$motdepasse));

        if($req->rowCount() == 1){
            $data = $req->fetch();
        }

        $req->closeCursor();
    }

}







function modifier($image, $nom, $prix, $categorie,$id)
{
    if(require("connexion.php"))
    {
        $req = $access->prepare("UPDATE  produits SET 'image'=?, nom=?, prix=?, categorie=? WHERE id=?");
        $req->execute(array(
            ':image' => $image,
            ':nom' => $nom,
            ':prix' => $prix,
            ':categorie' => $categorie,
            ':id' => $id
        ));
        $req->closeCursor();
    }
}

function getProduit($id)
{
    if(require("connexion.php"))
    {
        $req = $access->prepare("SELECT * FROM produits WHERE id=?");
        $req->execute(array($id));
        if($req->rowcount() == 1)
        {
            $data = $req->fetchAll(PDO::FETCH_OBJ);
            return $data;
        
        }else{
            return false;
        }
        $req->closeCursor(); 
    }
}


function ajouter($image, $nom, $prix, $categorie)
{
    if(require("connexion.php"))
    {
        $req = $access->prepare("INSERT INTO produits (image, nom, prix, categorie) VALUES (:image, :nom, :prix, :categorie)");
        $req->execute(array(
            ':image' => $image,
            ':nom' => $nom,
            ':prix' => $prix,
            ':categorie' => $categorie
        ));
        $req->closeCursor();
    }
}


function afficher()
{
    require("connexion.php");
    
    if($access)
    {
        $req = $access->prepare("SELECT * FROM produits ORDER BY id DESC ");
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        $req->closeCursor();
        return $data;
    }
}

function supprimer($id)
{
    
    require("connexion.php");
    
    
    if($access)
    {
        $req = $access->prepare("DELETE FROM produits WHERE id=?");
        $req->execute(array($id));
    }
}
?>
