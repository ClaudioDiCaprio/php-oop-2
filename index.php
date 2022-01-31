<?php

 require_once __DIR__ . '/classes/User.php';
 require_once __DIR__ . '/classes/Product.php';
 require_once __DIR__ . '/classes/CreditCard.php';


$new_user = new User('Mace','Windu');

$new_product = new Product('Single blade Lightsaber"Amethyst"',28000);

$new_creditCard = new CreditCard('5333271098172363', 932, 24, 01);

$new_user->setCreditCard($new_creditCard);
$new_user->gotItem($new_product);
// var_dump($new_user);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE FORCE shop</title>
</head>
<body>
    <h2> Sales Report</h2>
    <p> <?php echo"Mister: {$new_user->getName()} {$new_user->getSur()}" ?> </p>
    <p>Purchased: <?php echo $new_product->getKind() ?> </p>
    <p>Paid with: <?php echo "{$new_user->getCreditCard()->getCardNumber()} Credit Card." ?> </p>
    <p>Priced: <?php echo "{$new_product->getPrice()} Republic's credits."?> </p>
    <p>Jedi Discounted: <?php echo "{$new_user->getDiscountedP()} Republic's credits."?> </p>
</body>
</html>