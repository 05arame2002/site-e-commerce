<?php

try {
} catch (Exception $e){
    $e->getMessage(); 
}
$access=new pdo("mysql:host=localhost;dbname=ecommerce;charset=utf8","root","");
$access->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
?>



