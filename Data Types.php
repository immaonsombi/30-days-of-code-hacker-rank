<?php
$handle = fopen ("php://stdin","r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";
// Declare second integer, double, and String variables.
$inputint = fgets($handle);
$inputdob = floatval(fgets($handle));
$inputString = fgets($handle);
// Read and save an integer, double, and String to your variables.

// Print the sum of both integer variables on a new line.
echo $i+ $inputint .PHP_EOL;
// instead \n we can use the .php_eol method
// Print the sum of the double variables on a new line.
print number_format($d+ $inputdob, 1).PHP_EOL;
// Concatenate and print the String variables on a new line
// The 's' variable above should be printed first.

    echo $s .$inputString;

fclose($handle);
?>