<?php

$elements = array("steen", "papier", "schaar");
$random = rand(0, 2);

echo $elements[$random];
echo "\n";

$input = readline("Steen, papier of schaar? ");

if ($input == $elements[$random]) {
    echo "Goed!";
} else {
    echo "Helaas...";
}



?>