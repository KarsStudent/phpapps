<?php

$input = false;
$array = array();

while ($input != "stop") {
    $input = readline("Voer iets in: ");
    $space = " ";
    array_push($array, $input);
    array_push($array, $space);
}

array_pop($array);
array_pop($array);
array_pop($array);

$string = implode($array);
$count = strlen($string);
$chars = $count + 4;

for ($i = 0; $i < $chars; $i++) {
    echo "*";
}

echo "\n";
echo "* ";

for ($i = 0; $i < count($array); $i++) {
    echo $array[$i];
}

echo " *";
echo "\n";

for ($i = 0; $i < $chars; $i++) {
    echo "*";
}

?>