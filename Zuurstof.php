<?php

echo "\e[H\e[J";

$L = readline("Cilinder inhoud in liter: ");
$b = readline("Druk in bar: ");
$lpm = readline("Benodigd aantal liter per minuut:");

$m = number_format($L * $b / $lpm, 2, ',');
echo "\n$m minuten";

?>