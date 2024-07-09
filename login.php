<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>



<div class="container fluid">

    <div class="row">
        <div class="col md 3"></div>
        <div class="col md 6">
<br>
<br>
                <form method="post">
                  <div class="mb-3">
                    <label for="email" class="form-label">Email </label>
                    <input type="email" class="form-control" name="email" style="width:150%">
                    
                  </div>
                  <div class="mb-3">
                    <label for="motdepasse" class="form-label">Mot de passe</label>
                    <input type="motdepasse" class="form-control" name="motdepasse" style="width:150%">
                  </div>
                  
                  <input type="submit" class="btn btn-danger" name="envoyer" value="Se connecter">
                </form>

        </div>
        <div class="col md 3"></div>
    </div>

</div>
    
</body>
</html>

<?php

if(isset($POST['envoyer'])){
    if(!empty($_POST['email']) AND !empty($_POST['motdepasse'])){
        $email =htmlspecialchars($_POST['email']);
        $motdepasse =htmlspecialchars($_POST['motdepasse']); 
    }
}
?>