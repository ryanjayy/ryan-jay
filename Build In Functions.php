<?php

echo "<h2>Exercise 1: Sorting array</h2>";
$numbers = [10, 5, 8, 3, 15];
rsort($numbers);
echo "Sorted Numbers (Descending): " . implode(', ', $numbers) . "<br><br>";


echo "<h2>Exercise 2: Birthday countdown</h2>";
$today = new DateTime();
$birthday = new DateTime('2004-03-14'); // Change this to your actual birthday
$interval = $today->diff($birthday);
echo "Days until your birthday: " . $interval->days . "<br><br>";


echo "<h2>Exercise 3: Generating random float numbers</h2>";
function randNumber($min = 0, $max = 1) {
    return $min + mt_rand() / mt_getrandmax() * ($max - $min);
}
echo "Random Float: " . randNumber(1.5, 10.5) . "<br><br>";


echo "<h2>Exercise 4: Lowercase check</h2>";
$str = "ThiS iS A MiXed CAse StriNG!";
function lowercaseCheck($text) {
    return strtolower($text);
}
echo "Lowercased Text: " . lowercaseCheck($str) . "<br><br>";


echo "<h2>Exercise 5: Search inside of a text</h2>";
$text = "The quick brown fox... jumps! Over; the lazy dog? Wow!";
function searchText($str, $punctuation) {
    return substr_count($str, $punctuation);
}
$punct = '.';
echo "The text has '" . $punct . "' " . searchText($text, $punct) . " times.<br><br>";


echo "<h2>Exercise 6: Lowest and highest values</h2>";
$onlyNumbers = [5, 12, 3, 99, 0, 17];
echo "The lowest value is '" . min($onlyNumbers) . "' and the highest value is '" . max($onlyNumbers) . "'<br><br>";


echo "<h2>Exercise 7: String repeat</h2>";
$str = "RepeatMe ";
echo "Repeated String: " . str_repeat($str, 8) . "<br>";

?>