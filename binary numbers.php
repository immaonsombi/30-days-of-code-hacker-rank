<?php



$n = intval(trim(fgets(STDIN)));
function maxConsecutiveOnes($p) {
    // Convert decimal to binary
    $binaryString = decbin($p);

    // Split the binary string into an array of substrings, using '0' as the delimiter
    $consecutiveOnesArray = explode('0', $binaryString);

    // Find and print the length of the longest substring of consecutive '1's
    $maxLength = max(array_map('strlen', $consecutiveOnesArray));
    print $maxLength;
}

print maxConsecutiveOnes($n);