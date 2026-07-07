<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">


<?php
/*DFP40443: Full Stack Web Development
Activity: My first PHP Script
Name: Qistina
*/



$name = "NURQISTINA BATRISYIA BINTI ABDULLAH";


//this line prints a message to the browser
echo"Hello World!";

#you can also include HTML tags inside echo
echo "<h1>Welcome to PHP Programming</h1>";

echo "<hr><h3>My name is $name</h3>";
echo "<br><br>";

echo $name;

echo "<hr><h3>Double Qoute vs single Quote</h3>";
$institusi = "Politeknik Kuala Terengganu";

echo "Institusi : $institusi";
echo "<br>";
echo 'Institusi : $institusi'; 

echo "<br>";
echo "<hr><h3>Constant</h3>";

//Defining constant
define("SITE_URL", "https://pkt.mypolycc.edu.my");

//Using constant
echo 'Thank you for visiting - '. SITE_URL;
echo "<br>";
echo SITE_URL;

echo "<hr><h3>Variable vs Constant</h3>";
//1. defining a constant (fixed value)
define("TAX_RATE", 0.06); //6% Sales tax

//2.declaring variables (can change)
$itemName = "Laptop";
$price = 10;



$itemName = "Mouse";

//3.Calculation
$totalTax = $price * TAX_RATE;
$totalPrice = $price + $totalTax;

//4.output
echo "Item: " . $itemName . "<br>";
echo "Base Price: RM " . $price . "<br>";
echo "Total with Tax: RM " . $totalPrice;





?>