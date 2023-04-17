<?php

$naam = readline("Geef jouw naam : ");
$leeftijd = readline("Geef jouw leeftijd : ");
$maxleeftijd = 21;

echo "Hallo $naam \n";

if ( $leeftijd < $maxleeftijd ) {
    echo "Jij bent jonger dan $maxleeftijd jaar.\n";
}

if ( $leeftijd > $maxleeftijd ) {
    echo "Jij bent ouder dan $maxleeftijd jaar.\n";
}

if ( $leeftijd == $maxleeftijd ) {
    echo "Jij bent precies $maxleeftijd jaar.\n";
}

?>