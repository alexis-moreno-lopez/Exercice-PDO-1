<?php

require_once('./database.connect.php');

$request = $database->query('SELECT * FROM clients JOIN cards ON cards.cardNumber = clients.cardNumber WHERE cardTypesId=1');

$cardtypes = $request->fetchALL();




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
                echo '<li> Nom : '.$cardtype['lastName'] .' <P> '. 'prénom : '. $cardtype['firstName'].' <p>'. 'Date de Naissance : ' . $client['birthDate'].' <p>'.'Carte de fidelité : '. $client['card'].'<P> Numéro de carte : '. $client['cardNumber'].' </li>';
            }
            
            ?>
        </ul>
</body>
</html>