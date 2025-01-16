<?php

    $x = 10;
    $y =& $x;

    echo $x;
    echo "<br>";
    echo $y;

    $y = 15;

    echo "<br>";
    echo "Atribuição após referência";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;

    $x = 20;

    echo "<br>";
    echo "Atribuição após referência 2";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
