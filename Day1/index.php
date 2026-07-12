<?php
//Data Type
// Primative // one value 
// Non-Primative // multi value
// String - int - float - double - Null
$name = "zeina";
$age = 21;
$price = 15.5;
$data = null;

$student = [
    "name" => "zeina",
    "age" => 21,
    "price" => 15.5,
    "data" => null
];

print_r($student);
echo "<br>";

echo $student["name"] . "<br>";

// Decrement Operators Increment

$x = 10;

echo ++$x . "<br>"; // 11
echo $x . "<br>"; // 11

$x = 10;

echo $x++ . "<br>"; // 10
echo $x . "<br>"; // 11

echo "========================================" . "<br>";

// supermarket 

// Oil => 60; // Quni = 100
// Sugar = 30; // Quni = 200
// Tea => 10; // 500
// Cost

$oilPrice = 60;
$oilQuni = 100;
$oilCost = $oilPrice * $oilQuni;
echo "Oil Cost = " . $oilCost . "<br>";

$sugarPrice = 30;
$sugarQuni = 200;
$sugarCost = $sugarPrice * $sugarQuni;
echo "Sugar Cost = " . $sugarCost . "<br>";

$teaPrice = 10;
$teaQuni = 500;
$teaCost = $teaPrice * $teaQuni;
echo "Tea Cost = " . $teaCost . "<br>";

function TotalCost($price, $qun) {
    $total = $price * $qun;
    echo "<br>" . " Total Product Is " . $total . " EGP";
}

TotalCost(60, 100);
TotalCost(40, 200);
TotalCost(10, 500);

echo "<br>" . "========================================" . "<br>";

function getPrice($price, $quantity) {
    return $price * $quantity * 1.3;
}

echo "Total price of the product is " . getPrice(60, 100) . " EGP<br>";
echo "Total price of the product is " . getPrice(40, 200) . " EGP<br>";
echo "Total price of the product is " . getPrice(10, 500) . " EGP<br>";

echo "<br>" . "========================================" . "<br>";

$string = "Hello World This Is A PHP string example test";
$string2 = "Hello World This Is A PHP string example test";

// 1- Strlen()
echo "<br>Length: " . strlen($string) . "\n";

echo "<br>";

// 2- Strpos()
echo "Position of PHP is " . strpos($string, "PHP");

// 3- Str_replace()
$newstring = str_replace("World", "Universe", $string);
echo "<br>";
echo $newstring;
echo "<br>";

// 4- Substr()
$substring = substr($string, 6, 5);
echo $substring;

// 5- Strtolower()
// 6- Strtoupper()
echo "<br>";
echo strtolower($string);
echo "<br>";
echo strtoupper($string);

// 7- Trim()
echo "<br>";
$string3 = "   Hello World This Is A PHP string example test   ";
echo trim($string3);

?>