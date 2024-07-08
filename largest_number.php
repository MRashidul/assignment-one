<?php
/**
 * Script to determine the largest number among three given numbers
 * 
 * This script uses a series of if-else statements to compare three numbers 
 * and determines which one is the largest. The result is then printed.
 */

// Define the three numbers
$num1 = 4;
$num2 = 5;
$num3 = 6;

// Function to find the largest number
function findLargest($a, $b, $c) {
    if ($a >= $b && $a >= $c) {
        return $a;
    } elseif ($b >= $a && $b >= $c) {
        return $b;
    } else {
        return $c;
    }
}

// Call the function and store the result
$largest = findLargest($num1, $num2, $num3);

// Print the result
printf("The largest number among %d, %d, and %d is %d.", $num1, $num2, $num3, $largest);
?>