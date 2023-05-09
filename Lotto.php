<?php

//Clear terminal.
echo "\e[H\e[J";

//Maak random getallen aan tussen 1 en 42 en push naar array.
$allAntwoord = array();
for ($index = 0; $index <= 5; $index++) {
    $random = rand(1, 42);
    
    if (in_array($random, $allAntwoord)) {
            $index--;
    } else {
            array_push($allAntwoord, $random);
    }
}

//Echo antwoorden voor testing.
sort($allAntwoord);
echo implode(", ", $allAntwoord);
echo "\n";

//Vraag invoer 6* in een array.
$allInvoer = array();
for ($index = 1; $index <= 6; $index++) {
    $invoer = readline("Voer getal $index in: ");

    //Check of invoer == tussen 1 en 42.
    if ($invoer > 42 || $invoer < 1) {
        echo "Alleen getallen tussen de 1 en 42!\n";
        $index--;
    } else {
        array_push($allInvoer, $invoer);
    }
}

echo "\n";

//Check hoeveel matches er zijn.
$match = 0;
for ($index = 0; $index <= 5; $index++) {
    if (in_array($allAntwoord[$index], $allInvoer)) {
        $match++;
    }
}

//Sorteer en echo invoer.
sort($allInvoer);
echo "Dit waren jouw gekozen nummers: ";
echo implode(", ", $allInvoer);
echo "\n";

//Sorteer en echo antwoorden.
sort($allAntwoord);
echo "Dit waren de antwoorden: ";
echo implode(", ", $allAntwoord);
echo "\n\n";

//Output prijs afhankelijk van hoeveelheid matches.
switch($match) {
    case 3:
        echo "Je hebt €10,- gewonnen!";
    break;
    case 4:
        echo "Je hebt €1000,- gewonnen!";
    break;
    case 5:
        echo "Je hebt €100.000,- gewonnen!";
    break;
    case 6:
        echo "Je hebt €10.000.000,- gewonnen!";
    break;
    default:
    echo "Je hebt helaas niets gewonnen...";
    break;
}

?>