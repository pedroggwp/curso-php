<?php

    // true
    if (is_int(5)) {
        echo "É um inteiro <br>";
    }

    // false
    if (is_int("5")) {
        echo "É um inteiro <br>";
    }

    $a = 10;
    // true
    if (is_int($a)) {
        echo "É um inteiro <br>";
    }
