<?php

//Clear terminal
echo "\e[H\e[J";

//Random element kiezen
$elements = array("steen", "schaar", "papier");
$random = rand(0, 2);

//Vraag input en check of deze goed is
for ($i = 0; $i <= 0; $i++) {

    $input = readline("Steen, papier of schaar? ");

    if (!in_array($input, $elements)) {
        $i--;
    }
}

//Check of user wint, verliest of dat het gelijkspel is
if ($input == $elements[$random]) {

    echo ("\nHet is gelijkspel! Jij koos: $input\n");
    echo ("De computer koos: ".$elements[$random]);

} else if ($random == 0){

    if ($input == $elements[$random + 2]) {
        echo ("\nJe hebt gewonnen! Jij koos: $input\n");
        echo ("De computer koos: ".$elements[$random]);
    } else {
        echo "\nHelaas, je hebt niet gewonnen. Jij koos: $input\n";
        echo ("De computer koos: ".$elements[$random]);
    }

} else if ($random >= 0) {

    if ($input == $elements[$random - 1]) {
        echo ("\nJe hebt gewonnen! Jij koos: $input\n");
        echo ("De computer koos: ".$elements[$random]);
    } else {
        echo "\nHelaas, je hebt niet gewonnen. Jij koos: $input\n";
        echo ("De computer koos: ".$elements[$random]);
    }
}

?>