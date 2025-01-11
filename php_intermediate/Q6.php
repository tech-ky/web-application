<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

<?php
// 1. Create a numeric array of numbers 1 to 10
$numbers = range(1, 10);  // This creates an array [1, 2, 3, ..., 10]

// 2. Display the length of the array
echo "Length of the array: " . count($numbers) . "<br>";

// 3. Compute the average of the numbers in the array
$sum = array_sum($numbers);  // Sum of all elements in the array
$average = $sum / count($numbers);  // Average = sum / number of elements
echo "Average of the numbers: " . $average . "<br>";

// 4. Using foreach, display the square of all odd numbers in the array
echo "Square of odd numbers in the array:<br>";
foreach ($numbers as $num) {
    if ($num % 2 != 0) {  // Check if the number is odd
        echo "Square of $num: " . ($num * $num) . "<br>";
    }
}
?>
    </body>
</html>
