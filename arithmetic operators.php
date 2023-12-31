<?php

/*
 * Complete the 'solve' function below.
 *
 * The function accepts following parameters:
 *  1. DOUBLE meal_cost
 *  2. INTEGER tip_percent
 *  3. INTEGER tax_percent
 */

function solve($meal_cost, $tip_percent, $tax_percent) {
    // Write your code here
    $percent=100;
    $tip=($meal_cost/$percent) * $tip_percent;
    $tax=($meal_cost/$percent) * $tax_percent;
    $total_cost=$tip + $tax + $meal_cost;
    echo round($total_cost);

}

$meal_cost = doubleval(trim(fgets(STDIN)));

$tip_percent = intval(trim(fgets(STDIN)));

$tax_percent = intval(trim(fgets(STDIN)));

solve($meal_cost, $tip_percent, $tax_percent);
