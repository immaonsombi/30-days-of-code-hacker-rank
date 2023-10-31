<?php



$n = intval(trim(fgets(STDIN)));
for ($x =1; $x<= 10; $x++) {
$result=$n*$x;
  print $n. " x " .$x . " = " .$result . PHP_EOL;
}