<?php

$input = readline("Input: ");
$spaces = 0;
$sentences = 0;
$klinker = 0;
$medeklinker = 0;
$leestekens = 0;

for ($i = 0; $i < strlen($input); $i++) {
    $char = $input[$i];

    if ($char == " ") {
        $spaces++;
    }
    
    if ($char == "." || $char == "!" || $char == "?") {
        $sentences++;
    }

    if ($char == "a" || $char == "e" || $char == "u" || $char == "o" || $char == "i") {
        $klinker++;
    } else {
        $medeklinker++;
    }

    if ($char == "." || $char == "," || $char == ":" || $char == ";" || $char == "!" || $char == "?") {
        $leestekens++;
    }
}

echo ("Aantal karakters: ".strlen($input)."\n");
echo ("Aantal woorden: ".str_word_count($input)."\n");
echo ("Aantal spaties: $spaces\n");
echo ("Aantal zinnen: $sentences\n");
echo ("Aantal klinkers: $klinker\n");
echo ("Aantal medeklinkers: $medeklinker\n");
echo ("Aantal leestekens: $leestekens");

?>