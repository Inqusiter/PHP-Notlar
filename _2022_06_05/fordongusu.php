<?php

    for ($i = 1; $i <= 10; $i++) {
        echo "İ = $i" . "<br>";
    }
    echo "İ döngüsü bitti." . "<br>";

    for ($a = 1; $a <= 10; $a++) {
        echo "A = $a" . "<br>";
        if ($a == 4) {
            break;
        }
    }
    echo "A döngügüsü bitti. <br>";

    for ($c = 1; $c <=5; $c++) {
        echo "C = $c Döngüsü" . "<br>";
        for  ($d = 1; $d <=3; $d++) {
            echo "D = $d ,";
        }
        echo "<br> Dikkat C döngüsü bitti <br>.";
    }

?>