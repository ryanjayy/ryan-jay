<?php
// Exercise 1: Personal information
$x = 4;
$y = 3;
$z = ($x + $y) * 5;
echo "Exercise 1: The total is $z<br><br>";

// Exercise 2: Value added tax
$price = 100;
$vat = 0.12;
$totalPrice = $price + ($price * $vat);
echo "Exercise 2:<br>";
echo "Price: $price<br>";
echo "Vat: $vat<br>";
echo "Total price: $totalPrice<br><br>";

// Exercise 3: Average
$x = 5;
$y = 10;
$z = 15;
$average = ($x + $y + $z) / 3;
echo "Exercise 3: The average is " . number_format($average, 2) . "<br><br>";

// Exercise 4: Countries and capitals
$countries = array(
    "Netherlands" => "Amsterdam",
    "Thailand" => "Bangkok",
    "Germany" => "Berlin",
    "Philippines" => "Manila",
    "Japan" => "Tokyo"
);
echo "Exercise 4:<br>";
foreach ($countries as $country => $capital) {
    echo "The capital of $country is $capital<br>";
}
echo "<br>";

// Exercise 5: Centimeters to inches
$cm = 50;
$inch = $cm * 0.39;
echo "Exercise 5: $cm centimeters is " . number_format($inch, 2) . " inches.<br><br>";

// Exercise 6: Expenses
$expenses = array(1200, 950, 850, 1100, 1320);
$totalAmount = 0;
foreach ($expenses as $expense) {
    $totalAmount += $expense;
}
$amountOfExpenses = count($expenses);
echo "Exercise 6: My $amountOfExpenses biggest expenses were $totalAmount<br>";
?>
