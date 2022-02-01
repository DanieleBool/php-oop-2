<?php
require_once __DIR__ . "/classes/creditCard.php";
require_once __DIR__ . "/classes/utente.php";
require_once __DIR__ . "/classes/premium.php";
require_once __DIR__ . "/classes/product.php";

$utenti = [
    new utente('Maria', 'De Filippi', 60, new creditCard("3333333333", "01/11/2001", "Massimo Boldi")),
    new premium('Simona', 'Ventura', 50, new creditCard("1111111111", "03/02/2000", "Simona Ventura"), 1),
];
$products = [
    new product('Redmi Note 10', 'Xiaomi', 10000.00),
    new product('Iphone 10', 'Apple', 400.00),
    new product('Galaxy S10', 'Samsung', 0.00),
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <div>
        <?php foreach ($utenti as $utente) { ?>
            <div><?php echo $utente->getName() . " " . $utente->getSurname()?></div>
        <?php } ?>
    </div>
    <hr>
    <div>
        <?php foreach ($products as $product) { ?>
            <div>
                <div><?php echo $product->getName()?></div>
                <div><?php echo $product->getBrand()?></div>
                <div><?php echo $product->getPrice() . " euro"?></div>
            </div>
            <hr>
        <?php } ?>
    </div>
</body>
</html>