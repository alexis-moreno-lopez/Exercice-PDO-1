<?php

require_once('./database.connect.php');

$request = $database->query('SELECT * FROM `clients` LIMIT 21;');

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
    
</body>
</html>