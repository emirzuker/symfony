<?php
$id = $_GET['id'] ;
$nom = $_GET['name'] ;
$description = $_GET['description'] ;
$adresse = $_GET['adresse'] ;
$domaine = $_GET['domaine'] ; 
// les informations -> url http://localhost/atelier1/traitement.php?id=23&name=ZER&description=ZER&adresse=Z&domaine=23
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations du formulaire</title>
</head>
<body>
  
    <h1>Informations du formulaire</h1>
    <table border="1">
        <tr>
            <th>Champ</th>
            <th>Valeur</th>
        </tr>
        <tr>
            <td>Id</td>
            <td><?php echo $id; ?></td>
        </tr>
        <tr>
            <td>Nom</td>
            <td><?php echo $nom; ?></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><?php echo $description; ?></td>
        </tr>
        <tr>
            <td>Adresse</td>
            <td><?php echo $adresse; ?></td>
        </tr>
        <tr>
            <td>Domaine</td>
            <td><?php echo $domaine; ?></td>
        </tr>
    </table>
</body>
</html>
