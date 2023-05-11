<?php

echo "\e[H\e[J";

$L = readline("Cilinder inhoud in liter: ");
$b = readline("Druk in bar: ");
$lpm = readline("Benodigd aantal liter per minuut: ");

$m = $L * $b / $lpm;

if ($m <= 60) {
    $m = number_format($m, 0, ',');
    echo "\nJe hebt nog voor $m minuten zuurstof. :)\n";
}

if ($m > 60) {
    $hours = floor($m / 60);  
    $minutes = $m % 60;
    
    echo "$hours uur en $minutes minuten. :)";
}

?>