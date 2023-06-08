<?php

echo "\e[H\e[J";

$input = false;
$aantalSpaties = $aantalZinnen = $aantalKlinkers = $aantalMedeklinkers = $aantalLeestekens = 0;

$klinkers = array("a", "e", "u", "o", "i", "A", "E", "U", "O", "I");
$zinDefiner = array(".", "!", "?");
$leestekens = array(".", ",", "!", "?", ":", ";");

while (strlen($input) > 250 || $input == "" || (int)$input) {
    $input = readline("Invoer: ");
}

for ($i = 0; $i < strlen($input); $i++) {
    $char = $input[$i];

    if ($char == " ") {
        $aantalSpaties++;
    }
    
    if (in_array($char, $zinDefiner)) {
        $aantalZinnen++;
    }

    if (in_array($char, $klinkers)) {
        $aantalKlinkers++;
    } else {
        $aantalMedeklinkers++;
    }

    if ($char == " " || in_array($char, $leestekens)) {
        $aantalMedeklinkers--;
    }

    if (in_array($char, $leestekens)) {
        $aantalLeestekens++;
    }
}

echo ("Aantal karakters: ".strlen($input)."\n");
echo ("Aantal woorden: ".str_word_count($input)."\n");
echo ("Aantal spaties: $aantalSpaties\n");
echo ("Aantal zinnen: $aantalZinnen\n");
echo ("Aantal klinkers: $aantalKlinkers\n");
echo ("Aantal medeklinkers: $aantalMedeklinkers\n");
echo ("Aantal leestekens: $aantalLeestekens");

?>