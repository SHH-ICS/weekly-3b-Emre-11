<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Welcome Page</title>
  </head>

  <body>
    
<?php

$Large = 6;
$ELarge = 10;
$OneTopping = 1;
$TwoTopping = 1.75;
$ThreeTopping = 2.5 ;
$FourTopping = 3.35;
$Tax = 0.13;
$askcondition = true;
$askcondition2 = true;
while ($askcondition) {
    echo "<p>What size would you like? " ;
    $PizzaS = readline("Large or Extra Large? ");

    if ($PizzaS == "Large" || $PizzaS ==  "large" || $PizzaS == "Extra  Large" || $PizzaS == "extra large" || $PizzaS == "Extra large" || $PizzaS == "extra Large"){
          $askcondition = false;
    }
}

if ($PizzaS == "Large" || $PizzaS ==  "large") {
    $PizzaCost = $Large;
}
if ($PizzaS == "Extra Large" || $PizzaS == "extra large" || $PizzaS == "Extra large" || $PizzaS == "extra Large") {
    $PizzaCost = $ELarge;
}

while ($askcondition2) {
    echo "How many toppings would you like? ";
    $PizzaT = readline("1, 2, 3 or 4 ");
    if ($PizzaT == "1" || "2" || "3" || "4") {
        $askcondition2 = false;
    }
}

if ($PizzaT == "1") {
    $PizzaCost = $PizzaCost + $OneTopping;
}
if ($PizzaT == "2") {
    $PizzaCost = $PizzaCost + $TwoTopping;
}
if ($PizzaT == "3") {
    $PizzaCost = $PizzaCost + $ThreeTopping;
}
if ($PizzaT == "4") {
    $PizzaCost = $PizzaCost + $FourTopping;
}

$Subtotal = $PizzaCost;
echo " Subtotal: $". number_format($PizzaCost). PHP_EOL;
$Tax = $Tax * $Subtotal;
echo " Tax: $" . number_format($Tax, 2) . PHP_EOL;
$Total = $Tax + $Subtotal;
echo " Total: $" . number_format($Total, 2). PHP_EOL;



?>
    
  </body>
  
</html>
