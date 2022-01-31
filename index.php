<?php
include_once __DIR__ . '/classes/Users.php';
// include_once __DIR__ . './classes/Prodotti.php';

$Users = [
    $guido = new Users('Guido', 'Papa', 24),
    $luca = new Users('Luca', 'Santoro', 25)
];

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
    foreach ($Users as $user){
        echo "{$User->getNome}";
        
    }
    
    ?></h1>

</body>
</html>