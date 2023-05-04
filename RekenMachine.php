<?php

echo "\e[H\e[J";

$num1 = readline("Enter your first number: ");
$operator = readline("Enter your operator: ");
$num2 = readline("Enter your second number: ");
echo "\n";

if ((int)$num1 != $num1 || (int)$num2 != $num2) {
    exit("This is not a number!");
}
else if ($operator != "+" && $operator != "-" && $operator != "*" && $operator != "/") {
    exit("This is not an operator!");
}

if ($operator == "+") {
    $answer = $num1 + $num2;
}
else if ($operator == "-") {
    $answer = $num1 - $num2;
}
else if ($operator == "*") {
    $answer = $num1 * $num2;
}
else if ($operator == "/") {
    $answer = $num1 / $num2;
}

echo ("$num1 $operator $num2 = $answer");

?>