<?php
// Exercise 1: VAT Calculator
function calculateVat($price, $vat) {
    return $price + ($price * $vat / 100);
}
$price = 100;
$vat = 12;
$total = calculateVat($price, $vat);
echo "Exercise 1:<br>Price is: $price<br>Vat is: $vat%<br>Total price is: $total<br><br>";

// Exercise 2: Leap Year
function isLeapYear($year) {
    return ($year % 400 == 0 || ($year % 4 == 0 && $year % 100 != 0));
}
$year = 2024;
echo "Exercise 2:<br>";
echo $year . (isLeapYear($year) ? " is a leap year" : " is not a leap year") . "<br><br>";

// Exercise 3: Calculator
$num1 = 10;
$num2 = 5;

function addNumbers($a, $b) {
    return $a + $b;
}
function subtractNumbers($a, $b) {
    return $a - $b;
}
function multiplyNumbers($a, $b) {
    return $a * $b;
}
function divideNumbers($a, $b) {
    return $b != 0 ? $a / $b : "Cannot divide by zero";
}

echo "Exercise 3:<br>";
echo "Addition of $num1 and $num2 is: " . addNumbers($num1, $num2) . "<br>";
echo "Subtraction of $num1 and $num2 is: " . subtractNumbers($num1, $num2) . "<br>";
echo "Multiplication of $num1 and $num2 is: " . multiplyNumbers($num1, $num2) . "<br>";
echo "Division of $num1 and $num2 is: " . divideNumbers($num1, $num2) . "<br><br>";

// Exercise 4: Swapping Numbers
function swapNumbers(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}
$num1 = 4;
$num2 = 8;
echo "Exercise 4:<br>Before swapping: num1 = $num1, num2 = $num2<br>";
swapNumbers($num1, $num2);
echo "After swapping: num1 = $num1, num2 = $num2<br><br>";

// Exercise 5: Even or Odd
function evenOrNot($num) {
    return $num % 2 == 0 ? "even" : "odd";
}
$num = 7;
echo "Exercise 5:<br>Num1 is " . evenOrNot($num) . "<br><br>";

// Exercise 6: Prime Number
function isPrime($num) {
    if ($num <= 1) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}
$num = 11;
echo "Exercise 6:<br>";
echo $num . (isPrime($num) ? " is a prime number" : " is not a prime number") . "<br>";
?>
