<?php

echo chr(27).chr(91).'H'.chr(27).chr(91).'J';

echo "Type stop to stop\n";

$invoer = readline("Put your character or integer: ");
echo "\n";

while($invoer != "stop") {
    for ($i = 0; $i < strlen($invoer); $i++) {
        if ($invoer == (int) $invoer) {
            $character = $invoer[$i];

            $ascii = chr($character);
            echo "Character: $ascii\n";
            echo "\n";
        
            } elseif ($invoer != (int) $invoer) {
        
                $char = ord($character);
                echo ("Ascii: $char\n");
                echo "\n";
        
            }
    }

$invoer = readline("Put your character or integer: ");
echo "\n";

}

echo "The program has stopped\n";

?>