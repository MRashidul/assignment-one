<?php
/**
 * Convert a temperature from Celsius to Fahrenheit
 * 
 * This script converts a given temperature in Celsius to Fahrenheit 
 * and prints the result with two decimal points.
 */

// Define the temperature in Celsius
$celsius = 32;

// Function to convert Celsius to Fahrenheit
function celsiusToFahrenheit($celsius) {
    return ($celsius * 9 / 5) + 32;
}

// Perform the conversion
$fahrenheit = celsiusToFahrenheit($celsius);

// Print the result with 2 decimal points using printf
printf("The temperature %.2f degrees Celsius is equal to %.2f degrees Fahrenheit.", $celsius, $fahrenheit);
?>
