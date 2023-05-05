<?php

echo "\e[H\e[J";

$askUserName = readline("What is your username? ");
$askPassword = readline("What is your password? ");

$userName = "Kars Postema";
$password = "Welkom123";

if ($askUserName == $userName && $askPassword == $password) {
    echo "Youre logged in!\n";
    echo "Loading...\n";
    echo "#";
    sleep(1);
    echo "#";
    sleep(1);
    echo "#";
    sleep(1);
    echo "#";
    sleep(1);
    echo "#";
    sleep(1);
    echo "#";
    sleep(1);
    echo "#";
    sleep(1);
}
else if ($askUserName != $userName || $askPassword != $password) {
    exit("Wrong UserName or Password!");
}

//clear terminal met ASCII code
echo "\e[H\e[J";

//genereert random getal tussen 1, 100
$random = rand(1,100);

echo "Type 'stop' om te stoppen\n";

//vraagt invoer
$invoer = readline("Raad het getal tussen de 1 en 100: ");
echo "\n";

//checkt of invoer == $random
if ($invoer == $random) {
    exit("Het anwoord is goed!");
}

//checkt of invoer == "stop"
if ($invoer == "stop") {
    exit("Het programma is gestopt\n");
}

//als invoer != $random of "stop" dan runt deze loop. Deze loop blijft runnen als $invoer != $random
while ($invoer != $random) {
//checkt het aantal karakters en limiteerd deze naar 3. Checkt dan of invoer een integer is.
//checkt daarna of invoer tussen 1, 100 is.
//chect daarna of invoer kleiner of groter is dan $random
    if (strlen($invoer) > 3) {
        echo "Maximaal 3 karakters!\n";
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

//vraagt nieuwe invoer op
    $invoer = readline("Probeer het opnieuw: ");
    echo "\n";
    
//stopt programma als $invoer == "stop"
    if ($invoer == "stop") {
        exit("Het programma is gestopt\n");
    }
}

echo "Je antwoord is goed!\n";

?>