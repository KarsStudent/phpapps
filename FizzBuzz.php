<?php 

for ($i = 0; $i <= 100; $i++) {
    $three = $i / 3; $five = $i / 5; echo "$i "; 
    if (!is_float($three) && !is_float($five)) {
        echo "Fizz Buzz!";
    } 
        else if (!is_float($three)) {
        echo "Fizz! ";
    }
        else if (!is_float($five)) {
        echo "Buzz!";
    } 
    echo "\n";
    } 
    
    ?>