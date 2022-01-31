<?php
include_once __DIR__ . '/classes/Users.php';
include_once __DIR__ . '/classes/Prodotti.php';

$utenti = [
    $guido = new Users('Guido', 'Papa', '30'),
    $luca = new Users('Luca', 'Santoro', '25'),
];


var_dump($utenti);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1><?php  
    foreach ($utenti as $user){
        echo "nome: {$user->getNome()}<br>";
    }
    
    ?></h1>

</body>
</html>