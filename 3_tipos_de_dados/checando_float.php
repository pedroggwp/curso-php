<?php

    $a = "12.3";
    $b = 12.3;

    if (is_float($a)) {
        echo "É float 1 <br>";
    }

    if (is_float($b)) {
        echo "É float 2 <br>";
    }

    if (is_float(4432.3213)) {
        echo "É float 3 <br>";
    }

    if (is_float("teste")) {
        echo "É float 4 <br>";
    }
