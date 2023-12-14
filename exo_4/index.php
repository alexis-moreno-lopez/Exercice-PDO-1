<?php

require_once('./database.connect.php');

$request = $database->query('SELECT * FROM clients INNER JOIN cards ON cards.cardNumber = clients.cardNumber WHERE cards.cardTypesId=1');

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
    <?php
foreach ($cardtypes as $cardtype) {
    echo (' <P>Le prenom : ' . $cardtype['firstName'] . '<p>' . ' Le nom : ' . $cardtype['lastName']);
}
?>
</body>
</html>