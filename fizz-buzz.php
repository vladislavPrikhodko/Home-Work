<?php

echo "Enter the number Fizz\n";
$numberFizz = fopen ("php://stdin","r");
$Fizz = fgets($numberFizz);

echo "Enter the number Buzz\n";
$numberBuzz = fopen ("php://stdin","r");
$Buzz = fgets($numberBuzz);

echo "Enter the number 3\n";
$number3 = fopen ("php://stdin","r");
$numberThree = fgets($number3);

for ($Start = 1; $Start <= 100; $Start++) {
    if ($Start % $Fizz == 0 && $Start % $Buzz == 0) {
    echo "FB\n";
    } elseif ($Start % $Fizz == 0) {
    echo "F ";
    } elseif ($Start % $Buzz == 0) {
    echo "B ";
    } elseif ($Start > $numberThree) {
    break;
    } else echo "$Start ";
}