<?php

echo "\e[H\e[J";

$tafel=readline("Welke tafel wil je zien? ");
$begin=1;
$eind=10;

if ($tafel == "je moeder") {
    exit("Je moeder is geen tafel!");
} else if ($tafel == "je vader") {
    exit("Je vader is een sukkel!");
} else if ($tafel == "naomi") {
    exit("Naomi is een lieverd!");
} else if ($tafel == "kars") {
    exit("karsie parsie is een snarsie");
} else if ($tafel == "ballon") {
    exit ("up up it goes");
}

echo "\n\nTafel van $tafel:\n";

for ($teller=$begin;$teller<=$eind;$teller++) {
    $product=$teller*$tafel;
    echo $teller." x ".$tafel." = ".$product."\n";
}

?>