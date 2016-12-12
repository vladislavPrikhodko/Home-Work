<?php
echo "How much money you spend on cigarettes per month?\n";
$cigarettes = fopen ("php://stdin","r");
$numberSig = fgets($cigarettes);

echo "How much money you spend on alcohol per month?\n";
$alcohol = fopen ("php://stdin","r");
$numberAlc = fgets($alcohol);

echo "How much do you earn money per month?\n";
$money = fopen ("php://stdin","r");
$numberMon = fgets($money);

if (($numberSig + $numberAlc) > (($numberMon / 100) * 50)) {
  echo "Man, with the way of life you will live long!!!";
}  elseif (($numberSig > ($numberMon / 100) * 15) || ($numberAlc > ($numberMon / 100) * 15)) {
  echo "It seems it is time to take care of your health\n";
} else echo "Still do not abuse!!!!\n";


