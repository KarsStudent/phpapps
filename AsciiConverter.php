<?php

echo chr(27).chr(91).'H'.chr(27).chr(91).'J';

echo "Type stop to stop\n";

$invoer = readline("Put your character or integer: ");
echo "\n";

while($invoer != "stop") {
if ($invoer == (int) $invoer) {

$ascii = chr($invoer);
echo "Character: $ascii\n";
echo "\n";

} elseif ($invoer != (int) $invoer) {

    $char = ord($invoer);
    echo ("Ascii: $char\n");
    echo "\n";

}

$invoer = readline("Put your character or integer: ");
echo "\n";

}

echo "The program has stopped\n";

?>