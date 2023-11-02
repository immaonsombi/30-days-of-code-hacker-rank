<?php

// Function to process each test case
function process_test_case($s) {
    // Print even-indexed characters
    echo $s[0];
    for ($i = 2; $i < strlen($s); $i += 2) {
        echo $s[$i];
    }

    echo ' ';

    // Print odd-indexed characters
    for ($i = 1; $i < strlen($s); $i += 2) {
        echo $s[$i];
    }

    echo PHP_EOL;
}

// Read the number of test cases
$t = intval(trim(fgets(STDIN)));

// Process each test case
for ($i = 0; $i < $t; $i++) {
    // Read the input string
    $input_str = trim(fgets(STDIN));
    // Process the test case
    process_test_case($input_str);
}

?>
