<?php 


declare(strict_types=1) ; 

include 'C:/xampp/htdocs/atelier1/classes/start.php' ; 
$id = $_POST['id'] ;
$nom = $_POST['name'] ;
$description = $_POST['description'] ;
$adresse = $_POST['adresse'] ;
$domaine = $_POST['domaine'] ; 

$Club1 = new Club($id , $nom  ,$description , $adresse ,$domaine) ; 

var_dump($Club1) ; 




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form  method="post">
        <label >Id :</label><br>
        <input type="number" name="id"><br>
        <label >Nom :</label><br>
        <input type="text" name="name"><br>
        <label >Description :</label><br>
        <input type="text" name="description"><br>
        <label >Adresse :</label><br>
        <input type="text" name="adresse"><br>
        <label >Domaine :</label><br>
        <input type="text" name="domaine"><br>
        <button type="submit" >Submit</button>
    </form>
    
</body>
</html>
