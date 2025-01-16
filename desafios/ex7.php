<?php

    $arr = [
        "nome" => "Pedro",
        "idade" => 17,
        "tem_irmao" => true,
        "trabalha" => true
    ];

    $age = $arr['idade'];

    if ($age >= 18) {
        echo "É maior de idade";
    } else {
        echo "Falta ". (18 - $age) ." ano(s) para ser maior de idade";
    }
