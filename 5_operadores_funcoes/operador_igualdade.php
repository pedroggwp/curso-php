<?php

    if (66 == 66) {
        echo "Comparação verdadeira 1<br>";
    }

    if (3 == 4) {
        echo "Comparação verdadeira 2<br>";
    }

    $a = 12;
    $b =& $a;
    $c = 100;

    if ($a == $b) {
        echo "Comparação verdadeira 3<br>";
    }

    if ($a == $c) {
        echo "Comparação verdadeira 4<br>";
    }

    $name = "Pedro";
    $systemName = "Pedro";

    if ($name == $systemName) {
        echo "O nome coincide 5<br>";
    }