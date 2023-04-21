<?php

echo "\e[H\e[J";

$random = rand(1,100);

echo "Type 'stop' om te stoppen\n";

$invoer = readline("Raad het getal tussen de 1 en 100: ");
echo "\n";

if ($invoer == $random) {
    exit("Het anwoord is goed!");
}

if ($invoer == "stop") {
    exit("Het programma is gestopt\n");
}

while ($invoer != $random) {
    if (strlen($invoer) > 3) {
        echo "Te veel karakters!\n";
        echo "\n";
    } else if ($invoer != (int) $invoer) {
        echo "Alleen getallen!\n";
        echo "\n";
    } else if ($invoer > 100 || $invoer < 1) {
        echo "Alleen getallen tussen de 1 en 100!\n";
        echo "\n";
    } else if ($invoer < $random) {
        echo "Het getal is groter dan $invoer\n";
        echo "\n";
    } else if ($invoer > $random) {
        echo "Het getal is kleiner dan $invoer\n";
        echo "\n";
    }

    $invoer = readline("Probeer het opnieuw: ");
    echo "\n";

    if ($invoer == "stop") {
        exit("Het programma is gestopt\n");
    }
}

echo "Je antwoord is goed!\n";

?>