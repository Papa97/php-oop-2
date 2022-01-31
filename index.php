<?php
include_once __DIR__ . '/classes/Users.php';
include_once __DIR__ . '/classes/Prodotti.php';
include_once __DIR__ . '/classes/ProUsers.php';

$utenti = [
    $guido = new Users('Guido', 'Papa', '80'),
    $luca = new Users('Luca', 'Santoro', '25'),
];

$guido->setSconto(80);

$products =[
    $iPhone = new Prodotti('iphone', 1200)
];

$utentiPro = [
    $francesco = new ProUsers('Francesco','Martoccia',28,2),
];

$francesco->setSconto(28);

var_dump($utenti);
var_dump($utentiPro)
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