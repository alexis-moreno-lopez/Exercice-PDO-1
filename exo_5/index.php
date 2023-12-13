<?php

require_once('./database.connect.php');

$request = $database->query('SELECT * FROM `clients` WHERE lastName LIKE "M%" ORDER BY lastName');

$clients = $request->fetchAll();

var_dump($clients);


?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <ul>
            <?php
            foreach ($clients as $client) {
                echo '<li> Nom : '. $client['lastName'] .'<p> '. 'prenom : ' . $client['firstName'].' '.' </li>';
            }
            
            ?>
        </ul>
</body>
</html>