<?php

 require_once __DIR__ . '/classes/User.php';
 require_once __DIR__ . '/classes/Product.php';
 require_once __DIR__ . '/classes/CreditCard.php';


$new_user = new User('Mace','Windu');
// var_dump($new_user);
$new_product = new Product('Single blade Lightsaber"Amethyst"',28000);

$new_creditCard = new CreditCard();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP</title>
</head>
<body>
    
</body>
</html>