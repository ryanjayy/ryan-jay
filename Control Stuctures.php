<?php
// Exercise 1: Highest and Lowest
$a = 10;
$b = 20;
if ($a > $b) {
    echo "Exercise 1: Highest value is $a. Lowest value is $b<br><br>";
} else {
    echo "Exercise 1: Highest value is $b. Lowest value is $a<br><br>";
}

// Exercise 2: Card Suits
$value = 3; // change value between 1-4
echo "Exercise 2: ";
switch ($value) {
    case 1:
        echo "Spades<br><br>";
        break;
    case 2:
        echo "Hearts<br><br>";
        break;
    case 3:
        echo "Diamonds<br><br>";
        break;
    case 4:
        echo "Clubs<br><br>";
        break;
    default:
        echo "Invalid value. Please enter a number from 1 to 4.<br><br>";
}

// Exercise 3: Grading System
$score = 85;
echo "Exercise 3: ";
if ($score >= 90) {
    $grade = 'A';
} elseif ($score >= 80) {
    $grade = 'B';
} elseif ($score >= 70) {
    $grade = 'C';
} elseif ($score >= 60) {
    $grade = 'D';
} else {
    $grade = 'F';
}
$passed = ($grade != 'F') ? "Passed" : "Failed";
echo "Grade: $grade - You have $passed the exam.<br><br>";

// Exercise 4: Machine Replacement
$workingHours = 12000;
$machineAge = 8;
$failuresPerYear = 30;
echo "Exercise 4: ";
if ($workingHours > 10000 || $machineAge > 7 || $failuresPerYear > 25) {
    echo "Machine needs replacement<br><br>";
} else {
    echo "Machine does not need replacement<br><br>";
}

// Exercise 5: Leap Year
$year = 2024;
echo "Exercise 5: ";
if ($year % 400 == 0 || ($year % 4 == 0 && $year % 100 != 0)) {
    echo "$year is a leap year.<br><br>";
} else {
    echo "$year is not a leap year.<br><br>";
}

// Exercise 6: Multiplication Table
$number = 5;
echo "Exercise 6: Multiplication Table of $number<br>";
for ($i = 1; $i <= 10; $i++) {
    echo "$number x $i = " . ($number * $i) . "<br>";
}
echo "<br>";

// Exercise 7: Fibonacci Series 0 to 50
echo "Exercise 7: Fibonacci Series from 0 to 50<br>";
$a = 0;
$b = 1;
echo "$a, $b";
while (true) {
    $next = $a + $b;
    if ($next > 50) break;
    echo ", $next";
    $a = $b;
    $b = $next;
}
echo "<br>";
?>
