<?php

$array = array('PHP', 'C#', 'HTML', 'JavaScript', 'Java', 'C++', 'C');

array_push($array, "Python");
array_push($array, "Swift");

sort($array);

for ($i = 0; $i <= 8; $i++) {
    echo $array[$i];
    echo "\n";
}

echo "Items in the array: ";
echo sizeof($array);

?>