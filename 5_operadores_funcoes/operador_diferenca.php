<?php

    $a = 3;
    $b = 4;

    if ($a != $b) echo "Testando diferença 1<br>";

    if ($a != 3) echo "Testando diferença 2<br>"; // não é impresso

    if (false != "teste") echo "Testando diferença 3<br>";
