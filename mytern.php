<?php
echo "How much do you earn money?\n";

$handle = fopen ("php://stdin","r");
$number = fgets($handle);

echo ($number > 10000) ? "Lucky!!!" : "Loser(((";

echo "\n";